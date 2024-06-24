<?php

/**
 * DHL Express
 *
 * @author  Jay Trees <dhlexpress@grandels.email>
 * @link    https://github.com/grandeljay/modified-dhl-express
 * @package GrandeljayDhlExpress
 *
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 * @phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps
 */

use Grandeljay\DhlExpress\Class\Defaults;
use Grandeljay\DhlExpress\Constants;
use Grandeljay\DhlExpress\Enum\Zone;
use Grandeljay\DhlExpress\Quote;
use Grandeljay\DhlExpress\Trait\Field;
use Grandeljay\DhlExpress\Trait\Module;
use RobinTheHood\ModifiedStdModule\Classes\StdModule;

class grandeljaydhlexpress extends StdModule
{
    use Field;
    use Module\Keys;
    use Module\Installer;
    use Module\Uninstaller;

    public const VERSION = '0.9.1';

    public static function userMayAccessAPI(): bool
    {
        if (!isset($_SESSION['customer_id'])) {
            return false;
        }

        $access_query = xtc_db_query(
            sprintf(
                'SELECT *
                   FROM `%s`
                  WHERE `customers_id` = %s',
                TABLE_ADMIN_ACCESS,
                $_SESSION['customer_id']
            )
        );
        $access       = xtc_db_fetch_array($access_query);

        if (isset($access[self::class]) && '1' === $access[self::class]) {
            return true;
        }

        return false;
    }

    /**
     * Used by modified to determine the cheapest shipping method. Should
     * contain the return value of the `quote` method.
     *
     * @var array
     */
    public array $quotes = [];

    /**
     * Used to calculate the tax.
     *
     * @var int
     */
    public int $tax_class = 1;

    public function __construct()
    {
        parent::__construct(Constants::MODULE_SHIPPING_NAME);

        $this->checkForUpdate(true);
        $this->addKeys();
    }

    public function install()
    {
        parent::install();

        $this->addConfigurations();
        $this->setAdminAccess(self::class);
    }

    protected function updateSteps(): int
    {
        $version_before_update = $this->getVersion();
        $version_after_update  = self::VERSION;

        if (version_compare($version_before_update, '0.9.1', '<=')) {
            /** Add missing/definable zone countries */
            foreach (Zone::cases() as $zone) {
                $number = $zone->value;

                $configuration_key      = sprintf('SHIPPING_ZONE%s', $number);
                $configuration_method   = sprintf('getShippingZone%s', $number);
                $configuration_default  = Defaults::$configuration_method();
                $configuration_existing = $this->getConfig($configuration_key);

                $countries_json = \json_decode($configuration_default, true);
                $countries      = implode(',', $countries_json['countries']);
                $tariffs_json   = \json_decode($configuration_existing, true);
                $tariffs        = $tariffs_json;

                $configuration_value = \json_encode(
                    [
                        'countries' => $countries,
                        'tariffs'   => $tariffs,
                    ]
                );

                $this->removeConfiguration($configuration_key);
                $this->addConfiguration($configuration_key, $configuration_value, 6, 1);
            }

            /** Add Bulk Price Change configuration */
            $this->addConfigurationBulkPriceChange();
        }

        if (version_compare($version_before_update, $version_after_update, '<')) {
            $this->setVersion($version_after_update);

            return self::UPDATE_SUCCESS;
        }

        return self::UPDATE_NOTHING;
    }

    public function remove()
    {
        parent::remove();

        $this->removeConfigurations();
        $this->deleteAdminAccess(self::class);
    }

    /**
     * Used by modified to show shipping costs. Will be ignored if the value is
     * not an array.
     *
     * @var ?array
     */
    public function quote(): ?array
    {
        $quote  = new Quote();
        $quotes = $quote->getQuote();

        if (is_array($quotes) && !$quote->exceedsMaximumWeight()) {
            $this->quotes = $quotes;
        } else {
            return null;
        }

        return $quotes;
    }
}
