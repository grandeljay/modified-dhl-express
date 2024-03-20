<?php

/**
 * DHL Express
 *
 * @author  Jay Trees <dhlexpress@grandels.email>
 * @link    https://github.com/grandeljay/modified-dhl-express
 * @package GrandeljayDhlExpress
 */

namespace Grandeljay\DhlExpress;

$sql_data_array = [
    'shipping_method' => sprintf(
        constant(Constants::MODULE_SHIPPING_NAME . '_TEXT_TITLE_WEIGHT'),
        round($_SESSION['cart']->weight, 2)
    ),
];

xtc_db_perform(TABLE_ORDERS, $sql_data_array, 'update', sprintf('orders_id = %d', $insert_id));
