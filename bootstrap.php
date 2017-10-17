<?php

$projectDir =  __DIR__;
$vendorDir = $projectDir . "/vendor";
$servicesMap = [];
$routesMap = [];
$routesPrefix = "";
require_once $vendorDir . "/autoload.php";
require_once $projectDir . "/config/constants.php";
if (DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}
require_once $projectDir . "/config/routesMap.php";
require_once $projectDir . "/config/servicesMap.php";