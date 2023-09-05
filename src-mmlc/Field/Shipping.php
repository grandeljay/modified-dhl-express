<?php

namespace Grandeljay\DhlExpress\Field;

use Grandeljay\DhlExpress\{Constants, Zone};

class Shipping
{
    public static function getInternational(): string
    {
        ob_start();
        ?>
        <details>
            <summary>International</summary>

            <div>
                <?php foreach (Zone::cases() as $zone) { ?>
                    <?php
                    $zone_title          = sprintf('Zone %s', $zone->value);
                    $configuration_key   = sprintf('MODULE_SHIPPING_GRANDELJAYDHLEXPRESS_SHIPPING_ZONE%s', $zone->value);
                    $configuration_value = constant($configuration_key);
                    ?>
                    <details>
                        <summary><?= $zone_title ?></summary>

                        <div>
                            <p>Betrifft die Länder: <?= implode(', ', Zone::getCountries($zone)) ?>.</p>

                            <textarea name="configuration[<?= $configuration_key ?>]"
                                      spellcheck="false"
                                      data-url="<?= Constants::API_ENDPOINT_WEIGHT_GET ?>"
                                      data-zone="<?= $zone->value ?>"
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
