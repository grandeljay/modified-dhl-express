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
    'LONG_DESCRIPTION'                 => 'Aggiunge il metodo di spedizione DHL Express nel checkout.',
    'STATUS_TITLE'                     => 'Stato',
    'STATUS_DESC'                      => 'Selezioni Sì per attivare il modulo e No per disattivarlo.',

    /** Configuration */
    'ALLOWED_TITLE'                    => '',
    'ALLOWED_DESC'                     => '',

    'SORT_ORDER_TITLE'                 => 'Ordinamento',
    'SORT_ORDER_DESC'                  => 'Determina l\'ordinamento nell\'Admin e nel Checkout. I numeri più bassi vengono visualizzati per primi.',

    'WEIGHT_TITLE'                     => 'Peso',
    'WEIGHT_DESC'                      => 'Determinare il peso ideale e massimo.',
    'WEIGHT_PER_KG'                    => 'Prezzo per kg (da %s Kg, a %s Kg)',

    'SHIPPING_TITLE'                   => 'Spedizione',
    'SHIPPING_DESC'                    => 'Peso, prezzi e impostazioni dei vari metodi di spedizione DHL Express.',
    'SHIPPING_ZONE_PER_KG_TITLE'       => 'Prezzo al kg',
    'SHIPPING_ZONE_PER_KG_DESC'        => 'Regola l\'impostazione "Prezzo al kg" per le rispettive zone.',

    'SURCHARGES_TITLE'                 => 'Impatti',
    'SURCHARGES_DESC'                  => 'Impostazioni relative ai supplementi',

    'BULK_PRICE_CHANGE_TITLE'          => 'Variazione del prezzo alla rinfusa',
    'BULK_PRICE_CHANGE_DESC'           => 'Moltiplica tutti i prezzi di spedizione nel modulo per un fattore. Le modifiche sono solo un\'anteprima. I valori non sono definitivi finché non vengono salvati. Prima di ciò, il fattore può essere modificato tutte le volte che si vuole senza che i prezzi cambino effettivamente.',
    'BULK_PRICE_CHANGE_FACTOR_TITLE'   => 'Fattore',
    'BULK_PRICE_CHANGE_FACTOR_DESC'    => 'In base a quale fattore devono essere adeguati i prezzi di spedizione? Azzeramento dell\'anteprima ',
    'BULK_PRICE_CHANGE_BUTTON_PREVIEW' => 'Anteprima',
    'BULK_PRICE_CHANGE_BUTTON_RESET'   => 'Reset',
];

foreach ($translations as $key => $value) {
    $constant = Constants::MODULE_SHIPPING_NAME . '_' . $key;

    define($constant, $value);
}
