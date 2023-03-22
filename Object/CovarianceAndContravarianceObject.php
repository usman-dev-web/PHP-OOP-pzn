<?php

use Animal\{AnimalFood, CatShelter, DogShelter, Food};
// use Animal\CatShelter;
// use Animal\DogShelter;
// use Animal\Food;

require_once __DIR__ . "/../NameSpaces/Animal.php";
require_once __DIR__ . "/../NameSpaces/Covariance.php";

// object CatShelter and DogShelter (Covariance)
$catShelter = new CatShelter();
$cat = $catShelter->adopt("Catty");
$cat->eat(new AnimalFood()); // versi contravariance
// var_dump($cat);

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new Food()); // versi contravariance
// var_dump($dog);
