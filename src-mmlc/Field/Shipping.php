<?php

namespace Grandeljay\DhlExpress\Field;

use Grandeljay\DhlExpress\Constants;
use Grandeljay\DhlExpress\Enum\Zone;

class Shipping
{
    public static function getInternational(): string
    {
        $classes = [];

        if (isset($_GET['factor']) && \is_numeric($_GET['factor'])) {
            $classes[] = 'factor-active';
        }

        $class = \implode(' ', $classes);

        ob_start();
        ?>
        <details class="<?= $class ?>">
            <summary>International</summary>

            <div>
                <?php foreach (Zone::cases() as $zone) { ?>
                    <?php
                    $zone_title          = sprintf('Zone %s', $zone->value);
                    $configuration_key   = sprintf('MODULE_SHIPPING_GRANDELJAYDHLEXPRESS_SHIPPING_ZONE%s', $zone->value);
                    $configuration_value = constant($configuration_key);

                    /** Apply factor */
                    $factor              = $_GET['factor'] ?? 1;
                    $tariffs_json        = \json_decode($configuration_value, true);
                    $tariffs             = \array_map(
                        function (array $tariff) use ($factor) {
                            $tariff['weight-costs'] *= $factor;

                            return $tariff;
                        },
                        $tariffs_json['tariffs']
                    );
                    $countries           = $tariffs_json['countries'];
                    $configuration_value = \json_encode(
                        [
                            'countries' => $countries,
                            'tariffs'   => $tariffs,
                        ]
                    )

                    ?>
                    <details class="<?= $class ?>">
                        <summary><?= $zone_title ?></summary>

                        <div>
                            <textarea name="configuration[<?= $configuration_key ?>]"
                                      spellcheck="false"
                                      data-url="<?= Constants::API_ENDPOINT_WEIGHT_GET ?>"
                                      data-zone="<?= $zone->value ?>"
                                      data-factor=<?= $_GET['factor'] ?? 1 ?>
                                      ><?= $configuration_value ?></textarea>
                        </div>
                    </details>
                    <?php
                } ?>
            </div>
        </details>
        <?php
        $html = ob_get_clean();

        return $html;
    }
}
