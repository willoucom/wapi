<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

chdir(dirname(__FILE__));
chdir('../');

$request = "";
if(class_exists('submission')) {
    $submission = new submission();
    $request = $submission->transform();
}

if(class_exists('auth')) {
    $auth = new auth($request);
}

if(class_exists('render')) {
    $render = new render();
    $render->setSoumission($request);
}