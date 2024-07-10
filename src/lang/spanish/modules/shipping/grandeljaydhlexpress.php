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
    'TITLE'                            => 'grandeljay - DHL Express',
    'TEXT_TITLE'                       => 'DHL Express',
    'TEXT_TITLE_WEIGHT'                => 'DHL Express (%s kg)',
    'LONG_DESCRIPTION'                 => 'Añade el método de envío DHL Express en la caja.',
    'STATUS_TITLE'                     => 'Estado',
    'STATUS_DESC'                      => 'Seleccione Sí para activar el módulo y No para desactivarlo.',

    /** Configuration */
    'ALLOWED_TITLE'                    => '',
    'ALLOWED_DESC'                     => '',

    'SORT_ORDER_TITLE'                 => 'Orden de clasificación',
    'SORT_ORDER_DESC'                  => 'Determina la clasificación en Admin y Checkout. Los números más bajos se muestran primero.',

    'WEIGHT_TITLE'                     => 'Peso',
    'WEIGHT_DESC'                      => 'Determine el peso ideal y el peso máximo.',
    'WEIGHT_PER_KG'                    => 'Precio por kg (de %s Kg)',

    'SHIPPING_TITLE'                   => 'Envío',
    'SHIPPING_DESC'                    => 'Peso, precios y configuración de los distintos métodos de envío de DHL Express.',

    'SURCHARGES_TITLE'                 => 'Impactos',
    'SURCHARGES_DESC'                  => 'Ajustes relativos a los recargos',
    'SHIPPING_ZONE_PER_KG_TITLE'       => 'Precio por kg',
    'SHIPPING_ZONE_PER_KG_DESC'        => 'Ajusta la configuración de "Precio por kg" para las zonas respectivas.',

    'BULK_PRICE_CHANGE_TITLE'          => 'Cambio de precio a granel',
    'BULK_PRICE_CHANGE_DESC'           => 'Multiplica todos los precios de envío del módulo por un factor. Los cambios son sólo una vista previa. Los valores no son definitivos hasta que se guardan. Antes, el factor puede modificarse tantas veces como sea necesario sin que cambien realmente los precios.',
    'BULK_PRICE_CHANGE_FACTOR_TITLE'   => 'Factor',
    'BULK_PRICE_CHANGE_FACTOR_DESC'    => '¿Por qué factor deben ajustarse los precios de envío? Restablecer vista previa ',
    'BULK_PRICE_CHANGE_BUTTON_PREVIEW' => 'Vista previa',
    'BULK_PRICE_CHANGE_BUTTON_RESET'   => 'Restablecer',
];

foreach ($translations as $key => $value) {
    $constant = Constants::MODULE_SHIPPING_NAME . '_' . $key;

    define($constant, $value);
}
