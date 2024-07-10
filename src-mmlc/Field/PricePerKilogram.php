<?php

namespace Grandeljay\DhlExpress\Field;

use Grandeljay\DhlExpress\Constants;

class PricePerKilogram extends Field
{
    public static function getPricePerKilogram(): string
    {
        $configuration_key   = \sprintf(
            '%s_SHIPPING_ZONE_PER_KG',
            Constants::MODULE_SHIPPING_NAME
        );
        $configuration_value = \constant($configuration_key);

        /** Apply factor */
        $factor              = $_GET['factor'] ?? 1;
        $prices_json         = \json_decode($configuration_value, true);
        $prices              = \array_map(
            function (array $entry) use ($factor) {
                $entry['zones'] = \array_map(
                    function (float $zone) use ($factor) {
                        return $zone * $factor;
                    },
                    $entry['zones']
                );

                return $entry;
            },
            $prices_json
        );
        $configuration_value = \json_encode($prices, \JSON_PRETTY_PRINT);

        $class = self::getFieldClasses();

        ob_start();
        ?>
            <textarea class="<?= $class ?>" name="configuration[<?= $configuration_key ?>]" id=""><?= $configuration_value ?></textarea>
        <?php
        $html = ob_get_clean();

        return $html;
    }
}
