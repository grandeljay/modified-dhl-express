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
    'LONG_DESCRIPTION'                 => 'Fügt die DHL Express Versandmethode im Checkout ein.',
    'STATUS_TITLE'                     => 'Status',
    'STATUS_DESC'                      => 'Wählen Sie Ja um das Modul zu aktivieren und Nein um es zu deaktivieren.',

    /** Configuration */
    'ALLOWED_TITLE'                    => '',
    'ALLOWED_DESC'                     => '',

    'SORT_ORDER_TITLE'                 => 'Sortierreihenfolge',
    'SORT_ORDER_DESC'                  => 'Bestimmt die Sortierung im Admin und Checkout. Niedrigste Zahlen werden zuerst angezeigt.',

    'WEIGHT_TITLE'                     => 'Gewicht',
    'WEIGHT_DESC'                      => 'Ideal- und Maximalgewicht bestimmen.',
    'WEIGHT_PER_KG'                    => 'Preis pro Kg (ab %s Kg, bis %s Kg)',

    'SHIPPING_TITLE'                   => 'Versand',
    'SHIPPING_DESC'                    => 'Gewicht, Preise und Einstellungen zu den verschiedenen Versandarten von DHL Express.',
    'SHIPPING_ZONE_PER_KG_TITLE'       => 'Preis pro Kg',
    'SHIPPING_ZONE_PER_KG_DESC'        => 'Passt die "Preis pro Kg" Einstellung für die jeweiligen Zonen an.',

    'SURCHARGES_TITLE'                 => 'Aufschläge',
    'SURCHARGES_DESC'                  => 'Einstellungen bezüglich der Aufschläge',

    'BULK_PRICE_CHANGE_TITLE'          => 'Bulk Preisänderung',
    'BULK_PRICE_CHANGE_DESC'           => 'Multipliziert alle Versandpreise im Modul um einen Faktor. Die Änderungen sind hierbei lediglich eine Vorschau. Erst beim Speichern werden die Werte final übernommen. Davor kann der Faktor beliebig oft geändert werden, ohne dass sich die Preise tatsächlich verändern.',
    'BULK_PRICE_CHANGE_FACTOR_TITLE'   => 'Faktor',
    'BULK_PRICE_CHANGE_FACTOR_DESC'    => 'Um welchen Faktor sollen die Versandpreise angepasst werden? Vorschau Zurücksetzen ',
    'BULK_PRICE_CHANGE_BUTTON_PREVIEW' => 'Vorschau',
    'BULK_PRICE_CHANGE_BUTTON_RESET'   => 'Zurücksetzen',
];

foreach ($translations as $key => $value) {
    $constant = Constants::MODULE_SHIPPING_NAME . '_' . $key;

    define($constant, $value);
}
