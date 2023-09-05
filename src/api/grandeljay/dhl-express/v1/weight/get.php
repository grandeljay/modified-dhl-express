<?php

/**
 * DHL Express
 *
 * @author  Jay Trees <dhlexpress@grandels.email>
 * @link    https://github.com/grandeljay/modified-dhl-express
 * @package GrandeljayDhlExpress
 */

namespace Grandeljay\DhlExpress;

use grandeljaydhlexpress;

chdir('../../../../..');

require 'includes/application_top.php';
require DIR_WS_MODULES . 'shipping/grandeljaydhlexpress.php';
require \DIR_WS_LANGUAGES .  $_SESSION['language'] . '/modules/shipping/' . grandeljaydhlexpress::class . '.php';

if (!grandeljaydhlexpress::userMayAccessAPI()) {
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

usort(
    $entries,
    function ($entry_a, $entry_b) {
        return $entry_a['weight-max'] <=> $entry_b['weight-max'];
    }
);

ob_start();
?>
<table data-function="inputWeightChange">
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

    <tbody>
        <?php foreach ($entries as $data) { ?>
            <tr>
                <td><input type="number" step="any" value="<?= $data['weight-max'] ?>" data-name="weight-max"></td>
                <td><input type="number" step="any" value="<?= $data['weight-costs'] ?>" data-name="weight-costs"></td>
                <td>
                    <button type="button" value="remove">
                        <img src="images/icons/cross.gif">
                    </button>
                </td>
            </tr>
        <?php } ?>
    </tbody>

    <tfoot>
        <?php
        $textWeightPerKg          = \constant(Constants::MODULE_SHIPPING_NAME . '_WEIGHT_PER_KG');
        $shippingZone             = $jsonDecoded['zone'];
        $shippingZonePerKg        = \constant(Constants::MODULE_SHIPPING_NAME . '_SHIPPING_ZONE_PER_KG');
        $shippingZonePerKgEntries = \json_decode($shippingZonePerKg, true);

        $maxDefinedWeight = end($entries)['weight-max'] ?? 0;

        foreach ($shippingZonePerKgEntries as $zoneSet) {
            if ($maxDefinedWeight > $zoneSet['from']) {
                continue;
            }

            $costsPerKg = $zoneSet['zones'][$shippingZone];
            ?>
            <tr>
                <td><?= \sprintf($textWeightPerKg, $zoneSet['from'], $zoneSet['to']) ?></td>
                <td><input type="number" step="any" data-name="weight-per-kg" value="<?= $costsPerKg ?>" readonly="readonly" style="color: grey; cursor: no-drop;"></td>
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
