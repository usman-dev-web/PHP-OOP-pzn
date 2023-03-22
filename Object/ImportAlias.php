<?php

require_once __DIR__ . "/../NameSpaces/Conflict.php";
require_once __DIR__ . "/../NameSpaces/Helper.php";

// memanggil class, function, constant dengan kata kunci use agar tidak lagi mengetikan nama namespaces berulang kali dan menggunakan alias agar tidak terjadi error ketika ada
// nama class yang sama
use Data\One\Conflict as Conflict1; // menggunakan as(alias/nama lain) agar tidak terjadi error
use Data\Two\Conflict as Conflict2; // menggunakan as(alias/nama lain) agar tidak terjadi error
use function Helper\helpMe as help; // menggunakan as help sebagai nama lain dari function helpMe
use const Helper\APPLICATION as APP; // menggunakan as APP sebagain nama lain dari constant APPLICATION

$conflict1 = new Conflict1; // menggunakan nama class yang baru
$conflict2 = new Conflict2; // menggunakan nama class yang baru
help(); // menggunakan nama function yang baru
echo APP . PHP_EOL; // menggunakan nama constant yang baru