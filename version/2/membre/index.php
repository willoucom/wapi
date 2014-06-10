<?php
require '../../../vendor/autoload.php';
require '../../../common/config.inc.php';

$membre = new membre2();

$render->setVersion($membre->version());
$render->json();