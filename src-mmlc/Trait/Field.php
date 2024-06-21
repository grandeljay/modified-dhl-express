<?php

namespace Grandeljay\DhlExpress\Trait;

use Grandeljay\DhlExpress\Field\Weight;
use Grandeljay\DhlExpress\Field\Shipping;
use Grandeljay\DhlExpress\Field\Surcharges;

trait Field
{
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
        $html = Surcharges::getSurchargesGroup($value, $option);

        return $html;
    }
}
