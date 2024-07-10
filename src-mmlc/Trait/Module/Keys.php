<?php

namespace Grandeljay\DhlExpress\Trait\Module;

trait Keys
{
    private function addKeys(): void
    {
        $this->addKey('SORT_ORDER');

        $this->addKey('WEIGHT');
        $this->addKeysShipping();
        $this->addKey('SURCHARGES');
        $this->addKey('BULK_PRICE_CHANGE');
    }

    private function addKeysShipping(): void
    {
        $this->addKey('SHIPPING');
        $this->addKey('SHIPPING_ZONE_PER_KG');
    }
}
