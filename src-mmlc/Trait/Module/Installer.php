<?php

namespace Grandeljay\DhlExpress\Trait\Module;

use Grandeljay\DhlExpress\Class\Defaults;
use Grandeljay\DhlExpress\Enum\Zone;

trait Installer
{
    private function addConfigurations(): void
    {
        $this->addConfiguration('ALLOWED', '', 6, 1);
        $this->addConfiguration('SORT_ORDER', 2, 6, 1);

        $this->addConfigurationWeight();
        $this->addConfigurationShipping();
        $this->addConfigurationSurcharges();
        $this->addConfigurationBulkPriceChange();
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
            $configuration_value  = Defaults::$configuration_method();

            $this->addConfiguration($configuration_key, $configuration_value, 6, 1);
        }

        $this->addConfiguration('SHIPPING_ZONE_PER_KG', Defaults::getShippingZonePerKg(), 6, 1, \grandeljaydhlexpress::class . '::pricePerKilogram(');
    }

    private function addConfigurationSurcharges(): void
    {
        $this->addConfiguration('SURCHARGES', Defaults::getSurcharges(), 6, 1, \grandeljaydhlexpress::class . '::surcharges(');
        $this->addConfiguration('PICK_PACK', Defaults::getPickPack(), 6, 1);
    }

    private function addConfigurationBulkPriceChange(): void
    {
        $this->addConfiguration('BULK_PRICE_CHANGE', '', 6, 1, \grandeljaydhlexpress::class . '::bulkPriceChange(');
    }
}
