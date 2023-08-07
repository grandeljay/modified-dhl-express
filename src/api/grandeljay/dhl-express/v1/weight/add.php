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
    <td><input type="number" step="any" data-name="weight-max"></td>
    <td><input type="number" step="any" data-name="weight-costs"></td>
</tr>
<?php

$response = ob_get_clean();

header('Content-Type: text/html');
echo $response;
