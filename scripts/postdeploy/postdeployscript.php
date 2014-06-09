<?php
chdir(dirname(__FILE__));
require '../../common/config.inc.php';
/**
 * Script de post deployement
 */


// je me place à la racine du projet
system('pwd');


// composer
system('composer install');



$routes = parse_ini_file('routes.ini',true);
print_r($routes);

foreach ($routes['latest'] as $link => $directory) {
    $directory = "../version/".$directory;
    $link = "latest/".$link;
    unlink($link);
    echo "creation de " . $link ." pointant vers " . $directory ."\n";
    symlink($directory, $link);

}

foreach ($routes['beta'] as $link => $directory) {
    $directory = "../version/".$directory;
    $link = "beta/".$link;
    unlink($link);
    echo "creation de " . $link ." pointant vers " . $directory ."\n";
    symlink($directory, $link);

}