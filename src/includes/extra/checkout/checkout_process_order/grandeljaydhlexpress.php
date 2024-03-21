<?php

/**
 * DHL Express
 *
 * @author  Jay Trees <dhlexpress@grandels.email>
 * @link    https://github.com/grandeljay/modified-dhl-express
 * @package GrandeljayDhlExpress
 */

namespace Grandeljay\DhlExpress;

/**
 * Simplify and update shipping name
 */
$language_file = \sprintf(
    DIR_FS_CATALOG . 'lang/%s/modules/shipping/%s.php',
    $_SESSION['language'],
    \grandeljaydhlexpress::class
);

require $language_file;

$simplified_name = sprintf(
    constant(Constants::MODULE_SHIPPING_NAME . '_TEXT_TITLE_WEIGHT'),
    round($_SESSION['cart']->weight, 2)
);

/**
 * Table `orders`
 */
$sql_data_array = [
    'shipping_method' => $simplified_name,
];

\xtc_db_perform(\TABLE_ORDERS, $sql_data_array, 'update', sprintf('orders_id = %d', $insert_id));

/**
 * Table `orders_total`
 */
\xtc_db_query(
    \sprintf(
        'UPDATE `%s`
            SET `title`     = "%s"
          WHERE `orders_id` = %d
            AND `class`     = "ot_shipping"',
        \TABLE_ORDERS_TOTAL,
        $simplified_name,
        $insert_id
    )
);
