<?php

/**
 * DHL Express
 *
 * @author  Jay Trees <dhlexpress@grandels.email>
 * @link    https://github.com/grandeljay/modified-dhl-express
 * @package GrandeljayDhlExpress
 */

namespace Grandeljay\DhlExpress;

chdir('../../../../..');

require 'includes/application_top.php';
require DIR_WS_MODULES . 'shipping/grandeljaydhlexpress.php';
require \DIR_WS_LANGUAGES .  $_SESSION['language'] . '/modules/shipping/' . \grandeljaydhlexpress::class . '.php';

if (!\grandeljaydhlexpress::userMayAccessAPI()) {
    http_response_code(403);

    echo 'Access denied.';

    return;
}

$jsonEncoded = file_get_contents('php://input');

if (false === $jsonEncoded) {
    return;
}

$jsonDecoded = json_decode($jsonEncoded, true, 512, JSON_THROW_ON_ERROR);
$entries     = json_decode($jsonDecoded['json'], true, 512, JSON_THROW_ON_ERROR);
$tariffs     = $entries['tariffs'];
$countries   = \array_map('trim', $entries['countries']);

/** Sort tariffs by weight, ascending */
\uasort(
    $tariffs,
    function ($entry_a, $entry_b) {
        return $entry_a['weight-max'] <=> $entry_b['weight-max'];
    }
);

$countries_value = \implode(', ', $countries);

ob_start();
?>

Betrifft die Länder:<br>
<input type="text" value="<?= $countries_value ?>" data-name="countries" data-function="zoneChange">

<table>
    <thead>
        <tr>
            <th>Gewicht</th>
            <th>Kosten</th>
        </tr>
        <tr>
            <td>Maximal zulässiges Gewicht (in Kg) für diesen Preis.</td>
            <td>Versandkosten für Gewicht in EUR.</td>
        </tr>
    </thead>

    <tbody data-function="inputWeightChange">
        <?php foreach ($tariffs as $tariff) { ?>
            <tr>
                <td><input type="number" step="any" value="<?= $tariff['weight-max'] ?>" data-name="weight-max"></td>
                <td><input type="number" step="any" value="<?= $tariff['weight-costs'] ?>" data-name="weight-costs"></td>
                <td>
                    <button type="button" value="remove">
                        <img src="images/icons/cross.gif">
                    </button>
                </td>
            </tr>
        <?php } ?>
    </tbody>

    <tfoot data-function="inputPricePerKgChange">
        <?php
        $textWeightPerKg          = \constant(Constants::MODULE_SHIPPING_NAME . '_WEIGHT_PER_KG');
        $shippingZone             = $jsonDecoded['zone'];
        $shippingZonePerKg        = \constant(Constants::MODULE_SHIPPING_NAME . '_SHIPPING_ZONE_PER_KG');
        $shippingZonePerKgEntries = \json_decode($shippingZonePerKg, true);

        $maxDefinedWeight = end($tariffs)['weight-max'] ?? 0;
        $factor           = $jsonDecoded['factor'] ?? 1;

        foreach ($shippingZonePerKgEntries as $zoneSet) {
            $priceFrom = $zoneSet['from'];
            $priceTo   = $zoneSet['to'];

            if ($maxDefinedWeight > $priceFrom) {
                continue;
            }

            $costsPerKg = $zoneSet['zones'][$shippingZone] * $factor;
            ?>
            <tr>
                <td><?= \sprintf($textWeightPerKg, $priceFrom, $priceTo) ?></td>
                <td><input type="number" step="any" value="<?= $costsPerKg ?>" data-name="weight-per-kg" data-from="<?= $priceFrom ?>" data-to="<?= $priceTo ?>" readonly="readonly" style="color: grey; cursor: no-drop;"></td>
                <td></td>
            </tr>
            <?php
        }
        ?>
        <tr>
            <td><input type="button" class="button" value="Hinzufügen" data-url="<?= Constants::API_ENDPOINT_WEIGHT_ADD ?>"></td>
        </tr>
    </tfoot>
</table>
<?php
$response = ob_get_clean();

header('Content-Type: text/html');
echo $response;
