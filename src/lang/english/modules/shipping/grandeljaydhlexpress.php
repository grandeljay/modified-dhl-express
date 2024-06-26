<?php

/**
 * German translations
 *
 * @author  Jay Trees <dhlexpress@grandels.email>
 * @link    https://github.com/grandeljay/modified-dhl-express
 * @package GrandeljayDhlExpress
 */

use Grandeljay\DhlExpress\Constants;

$translations = [
    /** Module */
    'TITLE'             => 'grandeljay - DHL Express',
    'TEXT_TITLE'        => 'DHL Express',
    'TEXT_TITLE_WEIGHT' => 'DHL Express (%s kg)',
    'LONG_DESCRIPTION'  => 'Adds the DHL Express shipping method in the checkout.',
    'STATUS_TITLE'      => 'Status',
    'STATUS_DESC'       => 'Select Yes to activate the module and No to deactivate it.',

    /** Configuration */
    'ALLOWED_TITLE'     => '',
    'ALLOWED_DESC'      => '',

    'SORT_ORDER_TITLE'  => 'Sort order',
    'SORT_ORDER_DESC'   => 'Determines the sorting in the Admin and Checkout. Lowest numbers are displayed first.',

    'WEIGHT_TITLE'      => 'Weight',
    'WEIGHT_DESC'       => 'Determine ideal and maximum weight.',
    'WEIGHT_PER_KG'     => 'Price per kg (from %s Kg, to %s Kg)',
    'SHIPPING_TITLE'    => 'Shipping',
    'SHIPPING_DESC'     => 'Weight, prices and settings for the various DHL Express shipping methods.',
    'SURCHARGES_TITLE'  => 'Impacts',
    'SURCHARGES_DESC'   => 'Settings regarding the surcharges',
];

foreach ($translations as $key => $value) {
    $constant = Constants::MODULE_SHIPPING_NAME . '_' . $key;

    define($constant, $value);
}
