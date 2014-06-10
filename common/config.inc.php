<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

chdir(dirname(__FILE__));
chdir('../');

if(class_exists('render')) {
    $render = new render();
}

if(class_exists('render')) {
    $auth = new auth();
}