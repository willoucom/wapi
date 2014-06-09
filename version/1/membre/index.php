<?php
require '../../../vendor/autoload.php';
require '../../../common/config.inc.php';

$membre = new membre1();

echo "1 : ";
echo $membre->version();
