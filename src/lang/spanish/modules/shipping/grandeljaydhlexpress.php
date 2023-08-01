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
    'LONG_DESCRIPTION'  => 'Añade el método de envío DHL Express en la caja.',
    'STATUS_TITLE'      => 'Estado',
    'STATUS_DESC'       => 'Seleccione Sí para activar el módulo y No para desactivarlo.',

    /** Configuration */
    'ALLOWED_TITLE'     => '',
    'ALLOWED_DESC'      => '',

    'SHIPPING_TITLE'    => 'Envío',
    'SHIPPING_DESC'     => 'Peso, precios y configuración de los distintos métodos de envío de DHL Express.',
    'SURCHARGES_TITLE'  => 'Impactos',
    'SURCHARGES_DESC'   => 'Ajustes relativos a los recargos',
);

foreach ($translations as $key => $value) {
    $constant = Constants::MODULE_SHIPPING_NAME . '_' . $key;

    define($constant, $value);
}
