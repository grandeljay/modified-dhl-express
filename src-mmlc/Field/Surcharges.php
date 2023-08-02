<?php

namespace Grandeljay\DhlExpress\Field;

class Surcharges
{
    public static function getSurcharges(string $option): string
    {
        ob_start();
        ?>
        <details>
            <summary>Aufschläge</summary>
            <div>
                <?php
                $configuration_key   = $option;
                $configuration_value = constant($configuration_key);
                ?>
                <textarea name="configuration[<?= $configuration_key ?>]" spellcheck="false"><?= $configuration_value ?></textarea>
            </div>
        </details>
        <?php
        return ob_get_clean();
    }
}
