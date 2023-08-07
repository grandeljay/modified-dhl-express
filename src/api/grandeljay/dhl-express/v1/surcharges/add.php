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

if (rth_is_module_disabled(Constants::MODULE_SHIPPING_NAME)) {
    http_response_code(403);

    return;
}

ob_start();
?>
<tr>
    <td><input data-name="name" type="text" ></td>
    <td><input data-name="costs" type="number" step="any"></td>
    <td>
        <select data-name="type">
            <option value="fixed">Fest</option>
            <option value="percent">Prozentual</option>
        </select>
    </td>
    <td><input data-name="date-from" type="date"></td>
    <td><input data-name="date-to" type="date"></td>
</tr>
<?php

$response = ob_get_clean();

header('Content-Type: text/html');
echo $response;
