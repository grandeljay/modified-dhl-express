<?php

namespace Grandeljay\DhlExpress\Trait\Module;

use Grandeljay\DhlExpress\Enum\Zone;

trait Uninstaller
{
    private function removeConfigurations(): void
    {
        $this->removeConfiguration('ALLOWED');
        $this->removeConfiguration('SORT_ORDER');

        $this->removeConfigurationWeight();
        $this->removeConfigurationShipping();
        $this->removeConfigurationSurcharges();
        $this->removeConfigurationBulkPriceChange();
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

    private function removeConfigurationBulkPriceChange(): void
    {
        $this->removeConfiguration('BULK_PRICE_CHANGE');
    }
}
