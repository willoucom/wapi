<?php
require '../../../vendor/autoload.php';
require '../../../common/config.inc.php';

$membre = new membre2();

echo "2 : ";
echo $membre->version();
