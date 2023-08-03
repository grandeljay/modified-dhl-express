<?php

namespace Grandeljay\DhlExpress\Field;

use Grandeljay\DhlExpress\Constants;

class Weight
{
    public static function getWeight(): string
    {
        $configuration_key         = Constants::MODULE_SHIPPING_NAME . '_WEIGHT_';
        $configuration_key_ideal   = $configuration_key . 'IDEAL';
        $configuration_key_maximum = $configuration_key . 'MAXIMUM';

        $configuration_value_ideal   = constant($configuration_key_ideal);
        $configuration_value_maximum = constant($configuration_key_maximum);

        ob_start();
        ?>
        <details>
            <summary>Gewicht</summary>

            <div>
            <details>
                    <summary>Ideal</summary>

                    <div>
                        <input type="number" step="any" value="<?= $configuration_value_ideal ?>">
                    </div>
                </details>

                <details>
                    <summary>Maximal</summary>

                    <div>
                        <input type="number" step="any" value="<?= $configuration_value_maximum ?>">
                    </div>
                </details>
            </div>
        </details>
        <?php
        $html = ob_get_clean();

        return $html;
    }
}
