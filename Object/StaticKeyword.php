<?php

require_once __DIR__ . "/../Utility/MathHelper.php";

$mathHelper = new MathHelper();
// $mathHelper->name = "usman"; // error karena properti name sudah di set menjadi static

// mengakses properti static didalam class
echo MathHelper::$name . PHP_EOL;

// mengakses function static didalam class
$result = MathHelper::sum(19,120,210,30);
echo "Total : $result" . PHP_EOL;