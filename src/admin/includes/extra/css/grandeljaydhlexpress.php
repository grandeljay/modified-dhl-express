<?php

namespace Grandeljay\DhlExpress;

if (\rth_is_module_disabled(Constants::MODULE_SHIPPING_NAME)) {
    return;
}

$filename = 'includes/css/grandeljay_dhl_express.css';
$version  = hash_file('crc32c', DIR_FS_ADMIN . $filename);
?>
<link rel="stylesheet" type="text/css" href="<?php echo DIR_WS_ADMIN . $filename ?>?v=<?php echo $version ?>" />
