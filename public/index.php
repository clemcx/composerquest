<?php

require '../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;

$newHello = new Hello();
echo $newHello->talk();
$hi = new SayHello();
echo $hi->world();
