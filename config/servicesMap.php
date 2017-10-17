<?php

$pathFromProjectDir = str_replace($projectDir . "/", "", __DIR__);
$servicesMap = array_merge($servicesMap, [
    (!empty($pathFromProjectDir) ? $pathFromProjectDir . "/" : "") . 'services.yml',
]);