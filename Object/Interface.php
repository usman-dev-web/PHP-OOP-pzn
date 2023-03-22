<?php

require_once __DIR__ . "/../Interface/Data.php";

use Data\{Avanza};

// object dari class Avanza
$avanza = new Avanza();
echo $avanza->drive();
echo $avanza->getTire() . PHP_EOL;
echo $avanza->getBrand();
echo $avanza->isMaintenance() . PHP_EOL;
echo $avanza->toLocation("Usman");