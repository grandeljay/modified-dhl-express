<?php

namespace Grandeljay\DhlExpress\Field;

use Grandeljay\DhlExpress\Zone;

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
                    $zone_title        = sprintf('Zone %s', $zone->value);
                    $configuration_key = sprintf('MODULE_SHIPPING_GRANDELJAYDHLEXPRESS_SHIPPING_ZONE%s', $zone->value);
                    ?>
                    <details>
                        <summary><?= $zone_title ?></summary>

                        <div>
                            <p>Betrifft die Länder: <?= implode(', ', Zone::getCountries($zone)) ?>.</p>

                            <textarea name="configuration[<?= $configuration_key ?>]" spellcheck="false"><?= constant($configuration_key) ?></textarea>

                            <!--
                            <table>
                                <thead>
                                    <tr>
                                        <th>Gewicht</th>
                                        <th>Kosten</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>Maximal zulässiges Gewicht (in Kg) für diesen Preis.</td>
                                        <td>Versandkosten für Gewicht in EUR.</td>
                                        <td></td>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($zone_data as $index => $zone) { ?>
                                        <?php
                                        $name_weight_max   = sprintf(
                                            '%s[shipping][international][%s][%s][weight-max]',
                                            \grandeljaydhlexpress::class,
                                            $zone_name,
                                            $index
                                        );
                                        $name_weight_costs = sprintf(
                                            '%s[shipping][international][%s][%s][weight-costs]',
                                            \grandeljaydhlexpress::class,
                                            $zone_name,
                                            $index
                                        );
                                        ?>
                                        <tr>
                                            <td>
                                                <input type="number" step="any" name="<?= $name_weight_max ?>" value="<?= $zone['weight-max'] ?>">
                                            </td>
                                            <td>
                                                <input type="number" step="any" name="<?= $name_weight_costs ?>" value="<?= $zone['weight-costs'] ?>">
                                            </td>
                                            <td>
                                                <button type="button" class="remove">
                                                    <img src="images/icons/cross.gif">
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            -->
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
