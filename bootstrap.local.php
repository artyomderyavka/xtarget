<?php

if (!isset($targetServiceBootstrapped) || $targetServiceBootstrapped === false) {
    $routesPrefix = "/target";
    require_once __DIR__ . "/config/routesMap.php";
    require_once __DIR__ . "/config/servicesMap.php";
    $routesPrefix = "";
    $targetServiceBootstrapped = true;
}