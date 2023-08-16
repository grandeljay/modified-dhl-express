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
    'LONG_DESCRIPTION'  => 'Fügt die DHL Express Versandmethode im Checkout ein.',
    'STATUS_TITLE'      => 'Status',
    'STATUS_DESC'       => 'Wählen Sie Ja um das Modul zu aktivieren und Nein um es zu deaktivieren.',

    /** Configuration */
    'ALLOWED_TITLE'     => '',
    'ALLOWED_DESC'      => '',

    'SORT_ORDER_TITLE'  => 'Sortierreihenfolge',
    'SORT_ORDER_DESC'   => 'Bestimmt die Sortierung im Admin und Checkout. Niedrigste Zahlen werden zuerst angezeigt.',

    'WEIGHT_TITLE'      => 'Gewicht',
    'WEIGHT_DESC'       => 'Ideal- und Maximalgewicht bestimmen.',
    'SHIPPING_TITLE'    => 'Versand',
    'SHIPPING_DESC'     => 'Gewicht, Preise und Einstellungen zu den verschiedenen Versandarten von DHL Express.',
    'SURCHARGES_TITLE'  => 'Aufschläge',
    'SURCHARGES_DESC'   => 'Einstellungen bezüglich der Aufschläge',
);

foreach ($translations as $key => $value) {
    $constant = Constants::MODULE_SHIPPING_NAME . '_' . $key;

    define($constant, $value);
}
