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
use Grandeljay\DhlExpress\Field\{Shipping, Surcharges, Weight};
use RobinTheHood\ModifiedStdModule\Classes\StdModule;

class grandeljaydhlexpress extends StdModule
{
    private Installer $installer;

    public const VERSION     = '0.2.3';
    public array $properties = array();

    public static function weight(): string
    {
        $html = Weight::getWeight();

        return $html;
    }

    public static function shipping(): string
    {
        $html = Shipping::getInternational();

        return $html;
    }

    public static function surcharges(string $value, string $option): string
    {
        $html = Surcharges::getSurcharges($option);

        return $html;
    }

    /**
     * Used by modified to determine the cheapest shipping method. Should
     * contain the return value of the `quote` method.
     *
     * @var array
     */
    public array $quotes = array();

    public function __construct()
    {
        parent::__construct(Constants::MODULE_SHIPPING_NAME);

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

        $this->addConfiguration('SURCHARGES', $this->installer->getSurcharges(), 6, 1, \grandeljaydhlexpress::class . '::surcharges(');

        $this->installer->installAdminAccess();
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
    }

    public function remove()
    {
        parent::remove();

        $this->removeConfiguration('ALLOWED');
        $this->removeConfiguration('SORT_ORDER');

        $this->removeConfigurationWeight();
        $this->removeConfigurationShipping();

        $this->removeConfiguration('SURCHARGES');

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
        }

        return $quotes;
    }
}
