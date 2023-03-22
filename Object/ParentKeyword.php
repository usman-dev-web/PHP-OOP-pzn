<?php

require_once __DIR__ . "/../NameSpaces/Data.php";

use Data\{Shape, Rectangle};

// membuat object shape
$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

// membuat object rectangle
$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
// mengakses function yang ada di parent class
echo $rectangle->getParentCorner() . PHP_EOL;