<?php

// THIS KEYWORD
/**
 * saat kita membuat kode di dalam function di dalam class, kita  bisa menggunakan kata kunci this untuk mengakses object saat ini
 * misal kadang kita butuh mengakses properties atau function lain di class yang sama
 */

require_once __DIR__ . "/../Class/Person.php";
$person = new Person();
$person->name = "Usman";
$person->address = "Pandeglang";
$person->country = "Jepan";
echo $person->sayHello("Eko");

$person1 = new Person();
$person1->name = "Joko";
$person1->address = "Pandeglang";
$person1->country = "Jepan";
echo $person1->sayHello(null);
