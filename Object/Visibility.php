<?php

require_once __DIR__ . "/../Class/Product.php";
require_once __DIR__ . "/../Class/Pelajaran.php";

// menggunakan class Product
$product = new Product("Orange", 5000);
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;
echo $product->getInfo();

// var_dump($product);
// $product->name = "Apple"; // error tidak bisa diakses karena mempunyai visibility private

// menggunakan class Pelajaran
$pelajaran = new Pelajaran("TKJ", "ASJ");
// $pelajaran->kelas = "TKR"; // error tidak bisa diakses karena mempunyai visibility protected
echo $pelajaran->getKelas() . PHP_EOL;
echo $pelajaran->getMapel() . PHP_EOL;
echo $pelajaran->getInfo();

// menggunakan class Less turunan dari class Pelajaran
$less = new Less("RPL", "MySql");
echo $less->info();