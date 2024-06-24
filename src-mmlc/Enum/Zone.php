<?php

namespace Grandeljay\DhlExpress\Enum;

use Grandeljay\DhlExpress\Constants;

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
        $constant  = \sprintf(
            '%s_%s%d',
            Constants::MODULE_SHIPPING_NAME,
            'SHIPPING_ZONE',
            $zone->value
        );
        $value     = \constant($constant);
        $json      = \json_decode($value, true);
        $countries = \array_map(
            'trim',
            \explode(',', $json['countries'])
        );

        return $countries;
    }
}
