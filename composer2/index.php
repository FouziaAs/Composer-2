<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/src/WCS/Hello.php';
use App\WCS;


$hello = new App\WSC\Hello();
echo $hello->talk();
?>