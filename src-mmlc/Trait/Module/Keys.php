<?php

namespace Grandeljay\DhlExpress\Trait\Module;

trait Keys
{
    private function addKeys(): void
    {
        $this->addKey('SORT_ORDER');

        $this->addKey('WEIGHT');
        $this->addKey('SHIPPING');
        $this->addKey('SURCHARGES');
    }
}
