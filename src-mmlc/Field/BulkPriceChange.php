<?php

namespace Grandeljay\DhlExpress\Field;

use Grandeljay\DhlExpress\Constants;

class BulkPriceChange
{
    public static function getForm(): string
    {
        $factor             = $_GET['factor'] ?? 1;
        $page               = \xtc_href_link_admin(\DIR_ADMIN . \FILENAME_MODULES);
        $parameters_reset   = [
            'set'    => $_GET['set'],
            'module' => $_GET['module'],
            'action' => $_GET['action'],
        ];
        $parameters_preview = [
            'set'    => $_GET['set'],
            'module' => $_GET['module'],
            'action' => $_GET['action'],
            'factor' => $factor,
        ];
        $href_reset         = $page . '?' . \http_build_query($parameters_reset);
        $href_preview       = $page . '?' . \http_build_query($parameters_preview);

        $text_group_title        = \constant(Constants::MODULE_SHIPPING_NAME . '_BULK_PRICE_CHANGE_TITLE');
        $text_factor_title       = \constant(Constants::MODULE_SHIPPING_NAME . '_BULK_PRICE_CHANGE_FACTOR_TITLE');
        $text_factor_description = \constant(Constants::MODULE_SHIPPING_NAME . '_BULK_PRICE_CHANGE_FACTOR_DESC');
        $text_button_preview     = \constant(Constants::MODULE_SHIPPING_NAME . '_BULK_PRICE_CHANGE_BUTTON_PREVIEW');
        $text_button_reset       = \constant(Constants::MODULE_SHIPPING_NAME . '_BULK_PRICE_CHANGE_BUTTON_RESET');

        ob_start();
        ?>
        <details>
            <summary><?= $text_group_title ?></summary>

            <div>
                <?= $text_factor_title ?><br>
                <?= $text_factor_description ?><br>
                <input type="number" name="factor" value="<?= $factor ?>" step="any"><br>

                <a class="button" href="<?= $href_preview ?>" id="preview"><?= $text_button_preview ?></a>
                <a class="button" href="<?= $href_reset ?>"><?= $text_button_reset ?></a>
            </div>
        </details>

        <?php
        return ob_get_clean();
    }
}
