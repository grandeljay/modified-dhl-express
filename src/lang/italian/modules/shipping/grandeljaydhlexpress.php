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
    'LONG_DESCRIPTION'  => 'Aggiunge il metodo di spedizione DHL Express nel checkout.',
    'STATUS_TITLE'      => 'Stato',
    'STATUS_DESC'       => 'Selezioni Sì per attivare il modulo e No per disattivarlo.',

    /** Configuration */
    'ALLOWED_TITLE'     => '',
    'ALLOWED_DESC'      => '',

    'SORT_ORDER_TITLE'  => 'Ordinamento',
    'SORT_ORDER_DESC'   => 'Determina l\'ordinamento nell\'Admin e nel Checkout. I numeri più bassi vengono visualizzati per primi.',

    'WEIGHT_TITLE'      => 'Peso',
    'WEIGHT_DESC'       => 'Determinare il peso ideale e massimo.',
    'WEIGHT_PER_KG'     => 'Prezzo per kg (da %s Kg, a %s Kg)',
    'SHIPPING_TITLE'    => 'Spedizione',
    'SHIPPING_DESC'     => 'Peso, prezzi e impostazioni dei vari metodi di spedizione DHL Express.',
    'SURCHARGES_TITLE'  => 'Impatti',
    'SURCHARGES_DESC'   => 'Impostazioni relative ai supplementi',
];

foreach ($translations as $key => $value) {
    $constant = Constants::MODULE_SHIPPING_NAME . '_' . $key;

    define($constant, $value);
}
