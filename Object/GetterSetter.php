<?php

require_once __DIR__ . "/../Class/Category.php";

$category = new Category();
$category->setName("Laptop"); // mengubah data
$category->setExpensive(true); // mengubah data

// print data ke layar
echo "Name : {$category->getName()}" . PHP_EOL; // mendapatkan data
echo "Expensive : {$category->isExpensive()}" . PHP_EOL; // mendapatkan data