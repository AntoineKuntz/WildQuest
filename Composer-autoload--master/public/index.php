<?php

require_once __DIR__ . '/../vendor/autoload.php';

$Hello = new App\Wcs\Hello();

echo $Hello->talk();

