<?php

namespace Grandeljay\DhlExpress\Trait;

use Grandeljay\DhlExpress\Field\Weight;
use Grandeljay\DhlExpress\Field\Shipping;
use Grandeljay\DhlExpress\Field\Surcharges;
use Grandeljay\DhlExpress\Field\BulkPriceChange;
use Grandeljay\DhlExpress\Field\PricePerKilogram;

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

    public static function bulkPriceChange(string $value, string $option): string
    {
        $html = BulkPriceChange::getForm($value, $option);

        return $html;
    }

    public static function pricePerKilogram(string $value, string $option): string
    {
        $html = PricePerKilogram::getPricePerKilogram($value, $option);

        return $html;
    }
}
