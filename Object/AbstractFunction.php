<?php

require_once __DIR__ . "/../NameSpaces/Animal.php";

use Animal\{Animals, Cat, Dog};

// membuat object dari masing2 class, khusus untuk class Animals tidak bisa dibuat object karena abstract class

// object cat
$cat = new Cat();
$cat->name = "Pussy";
echo $cat->run();

// object dog
$dog = new Dog();
$dog->name = "Doggy";
echo $dog->run();