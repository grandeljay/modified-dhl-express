<?php

/**
 * DHL Express
 *
 * @author  Jay Trees <dhlexpress@grandels.email>
 * @link    https://github.com/grandeljay/modified-dhl-express
 * @package GrandeljayDhlExpress
 */

namespace Grandeljay\DhlExpress;

if (rth_is_module_disabled(Constants::MODULE_SHIPPING_NAME)) {
    return;
}

/** Only enqueue JavaScript when module settings are open */
$grandeljaydhlexpress_admin_screen = array(
    'set'    => 'shipping',
    'module' => \grandeljaydhlexpress::class,
    'action' => 'edit',
);

parse_str($_SERVER['QUERY_STRING'] ?? '', $query_string);

foreach ($grandeljaydhlexpress_admin_screen as $key => $value) {
    if (!isset($query_string[$key]) || $query_string[$key] !== $value) {
        return;
    }
}

$file_name    = '/' . DIR_ADMIN . 'includes/javascript/grandeljaydhlexpress.js';
$file_path    = DIR_FS_CATALOG .  $file_name;
$file_version = hash_file('crc32c', $file_path);
$file_url     = $file_name . '?v=' . $file_version;
?>
<script type="text/javascript" src="<?= $file_url ?>" defer></script>
