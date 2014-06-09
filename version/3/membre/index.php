<?php
require '../../../vendor/autoload.php';
require '../../../common/config.inc.php';

$membre = new membre3();

echo "3 : ";
echo $membre->version();
