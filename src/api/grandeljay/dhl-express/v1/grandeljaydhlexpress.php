<?php

/**
 * DHL Express
 *
 * @author  Jay Trees <dhlexpress@grandels.email>
 * @link    https://github.com/grandeljay/modified-dhl-express
 * @package GrandeljayDhlExpress
 */

$jsonEncoded = file_get_contents('php://input');

if (false === $jsonEncoded) {
    return;
}

$jsonDecoded = json_decode($jsonEncoded, true, 512, JSON_THROW_ON_ERROR);
$entries     = json_decode($jsonDecoded['json'], true, 512, JSON_THROW_ON_ERROR);

ob_start();
?>
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

    <tbody>
        <?php foreach ($entries as $data) { ?>
            <tr>
                <td><input type="number" step="any" value="<?= $data['weight-max'] ?>" data-name="weight-max"></td>
                <td><input type="number" step="any" value="<?= $data['weight-costs'] ?>" data-name="weight-costs"></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php
$response = ob_get_clean();

header('Content-Type: text/html');
echo $response;
