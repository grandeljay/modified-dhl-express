<?php

/**
 * German translations
 *
 * @author  Jay Trees <dhlexpress@grandels.email>
 * @link    https://github.com/grandeljay/modified-dhl-express
 * @package GrandeljayDhlExpress
 */

use Grandeljay\DhlExpress\Constants;

$translations = array(
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

    'SHIPPING_TITLE'    => 'Shipping',
    'SHIPPING_DESC'     => 'Weight, prices and settings for the various DHL Express shipping methods.',
    'SURCHARGES_TITLE'  => 'Impacts',
    'SURCHARGES_DESC'   => 'Settings regarding the surcharges',
);

foreach ($translations as $key => $value) {
    $constant = Constants::MODULE_SHIPPING_NAME . '_' . $key;

    define($constant, $value);
}