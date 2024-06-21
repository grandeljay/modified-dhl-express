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

use Grandeljay\DhlExpress\{Constants, Installer, Quote, Zone};
use Grandeljay\DhlExpress\Trait\Field;
use RobinTheHood\ModifiedStdModule\Classes\StdModule;

class grandeljaydhlexpress extends StdModule
{
    use Field;

    private Installer $installer;

    public const VERSION     = '0.9.1';
    public array $properties = [];

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

        $this->addKey('SORT_ORDER');

        $this->addKey('WEIGHT');
        $this->addKey('SHIPPING');
        $this->addKey('SURCHARGES');

        $this->installer = new Installer();
    }

    public function install()
    {
        parent::install();

        $this->addConfiguration('ALLOWED', '', 6, 1);
        $this->addConfiguration('SORT_ORDER', 2, 6, 1);

        $this->addConfigurationWeight();
        $this->addConfigurationShipping();
        $this->addConfigurationSurcharges();

        $this->installer->installAdminAccess();
    }

    protected function updateSteps(): int
    {
        if (version_compare($this->getVersion(), self::VERSION, '<')) {
            $this->setVersion(self::VERSION);

            return self::UPDATE_SUCCESS;
        }

        return self::UPDATE_NOTHING;
    }

    private function addConfigurationWeight(): void
    {
        $this->addConfiguration('WEIGHT', '', 6, 1, \grandeljaydhlexpress::class . '::weight(');
        $this->addConfiguration('WEIGHT_IDEAL', round(SHIPPING_MAX_WEIGHT * 0.75), 6, 1);
        $this->addConfiguration('WEIGHT_MAXIMUM', SHIPPING_MAX_WEIGHT, 6, 1);
    }

    private function addConfigurationShipping(): void
    {
        $this->addConfiguration('SHIPPING', '', 6, 1, \grandeljaydhlexpress::class . '::shipping(');

        foreach (Zone::cases() as $zone) {
            $number = $zone->value;

            $configuration_key    = sprintf('SHIPPING_ZONE%s', $number);
            $configuration_method = sprintf('getShippingZone%s', $number);
            $configuration_value  = $this->installer->$configuration_method();

            $this->addConfiguration($configuration_key, $configuration_value, 6, 1);
        }

        $this->addConfiguration('SHIPPING_ZONE_PER_KG', $this->installer->getShippingZonePerKg(), 6, 1);
    }

    private function addConfigurationSurcharges(): void
    {
        $this->addConfiguration('SURCHARGES', $this->installer->getSurcharges(), 6, 1, self::class . '::surcharges(');
        $this->addConfiguration('PICK_PACK', $this->installer->getPickPack(), 6, 1);
    }

    public function remove()
    {
        parent::remove();

        $this->removeConfiguration('ALLOWED');
        $this->removeConfiguration('SORT_ORDER');

        $this->removeConfigurationWeight();
        $this->removeConfigurationShipping();
        $this->removeConfigurationSurcharges();

        $this->installer->uninstallAdminAccess();
    }

    private function removeConfigurationWeight(): void
    {
        $this->removeConfiguration('WEIGHT');
        $this->removeConfiguration('WEIGHT_IDEAL');
        $this->removeConfiguration('WEIGHT_MAXIMUM');
    }

    private function removeConfigurationShipping(): void
    {
        $this->removeConfiguration('SHIPPING');

        foreach (Zone::cases() as $zone) {
            $number = $zone->value;

            $configuration_key = sprintf('SHIPPING_ZONE%s', $number);

            $this->removeConfiguration($configuration_key);
        }

        $this->removeConfiguration('SHIPPING_ZONE_PER_KG');
    }

    private function removeConfigurationSurcharges(): void
    {
        $this->removeConfiguration('SURCHARGES');
        $this->removeConfiguration('PICK_PACK');
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
