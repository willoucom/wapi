<?php
require '../../../vendor/autoload.php';
require '../../../common/config.inc.php';

$membre = new membre3();

$render->setVersion($membre->version());
$render->json();