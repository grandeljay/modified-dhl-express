<?php

/**
 * DHL Express
 *
 * @author  Jay Trees <dhlexpress@grandels.email>
 * @link    https://github.com/grandeljay/modified-dhl-express
 * @package GrandeljayDhlExpress
 */

namespace Grandeljay\DhlExpress;

ob_start();
?>
<tr>
    <td><input data-name="weight-max" type="number" step="any"></td>
    <td><input data-name="weight-costs" type="number" step="any"></td>
    <td>
        <button type="button" value="remove">
            <img src="images/icons/cross.gif">
        </button>
    </td>
</tr>
<?php

$response = ob_get_clean();

header('Content-Type: text/html');
echo $response;
