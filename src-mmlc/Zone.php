<?php

namespace Grandeljay\DhlExpress;

enum Zone: int
{
    case ONE   = 1;
    case TWO   = 2;
    case THREE = 3;
    case FOUR  = 4;
    case FIVE  = 5;
    case SIX   = 6;
    case SEVEN = 7;
    case EIGHT = 8;
    case NINE  = 9;
    case TEN   = 10;

    public static function fromInt(int $zone_number): Zone
    {
        foreach (Zone::cases() as $zone) {
            if ($zone_number === $zone->value) {
                return $zone;
            }
        }

        throw new \Exception(
            sprintf(
                '"%s" is not a valid Zone.',
                $zone_number
            )
        );
    }

    public static function fromCountry(string $country_code): ?Zone
    {
        foreach (self::cases() as $zone) {
            $countries = self::getCountries($zone);

            if (in_array($country_code, $countries, true)) {
                return $zone;
            }
        }

        return null;
    }

    public static function getCountries(Zone $zone): array
    {
        $countries = match ($zone) {
            Zone::ONE   => array('BE', 'LU', 'NL'),
            Zone::TWO   => array('AT', 'DK', 'FR'),
            Zone::THREE => array('GB', 'IT', 'ES', 'CZ', 'PL'),
            Zone::FOUR  => array('SE', 'SK', 'SI', 'HU', 'FI', 'EE', 'BG', 'GR', 'RO', 'HR', 'PT', 'LT', 'LV'),
            Zone::FIVE  => array('NO', 'CH'),
            Zone::SIX   => array('RS', 'AL', 'MD', 'BY', 'ME', 'BA', 'MK', 'TR', 'UA', 'XK', 'RU'),
            Zone::SEVEN => array('US', 'CA', 'MX'),
            Zone::EIGHT => array('TH', 'JP'),
            Zone::NINE  => array('AU'),
            Zone::TEN   => array('PR', 'DO', 'KG', 'KZ', 'PR', 'AL', 'AR'),

            default => array(),
        };

        return $countries;
    }
}
