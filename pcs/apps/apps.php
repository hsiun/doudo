<?php

require_once '../libs/BaiduPCS.class.php';
require_once 'config.php';

$root_dir = '/apps' . '/';
$path = $root_dir . '.1.1.1.1.';

$pcs = new BaiduPCS($access_token);
#echo $pcs->getQuota();

echo $pcs->makeDirectory($path);

?>
