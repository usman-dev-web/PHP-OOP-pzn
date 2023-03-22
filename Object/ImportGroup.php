<?php

require_once __DIR__ . "/../NameSpaces/Conflict.php";
require_once __DIR__ . "/../NameSpaces/Helper.php";

// memanggil class, function, constant dengan kata kunci use agar tidak lagi mengetikan nama namespaces berulang kali
// menggunakan group use declaration agar kita bisa mengimport beberapa class, function, constant dalam satu perintah use dengan menggunakan kurung{}
use Data\One\{Conflict as Conflict1, Sample, Dummy}; 
use function Helper\{helpMe, sayHello}; 
use const Helper\APPLICATION; 

$conflict = new Conflict1();
$sample = new Sample();
$dummy = new Dummy();
helpMe();
sayHello("Usman"); 
echo APPLICATION . PHP_EOL; 