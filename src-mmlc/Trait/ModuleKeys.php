<?php

namespace Grandeljay\DhlExpress\Trait;

trait ModuleKeys
{
    private function addKeys(): void
    {
        $this->addKey('SORT_ORDER');

        $this->addKey('WEIGHT');
        $this->addKey('SHIPPING');
        $this->addKey('SURCHARGES');
    }
}
