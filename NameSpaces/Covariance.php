<?php

// COVARIANCE
/**
 * saat kita meng override function dari parent class, biasanya di child class kita akan membuat function yang sama dengan function yang di parent
 * covariance memungkinkan kita mengoverride return function yang di parent dengan return value yang lebih spesifik
 */

// kode covariance
namespace Animal;

require_once __DIR__ . "/Animal.php";

interface AnimalShelter
{
    function adopt(string $name): Animals;
}

// class turunan dari AnimalShelter dan mengoverride return function yang di pareng dengan return value yang lebih spesifik
class CatShelter implements AnimalShelter
{
    // override function parent
    function adopt(string $name): Cat // covariance (mengembalikan data yang lebih spesifik dari return parentnya)
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    // override function parent
    function adopt(string $name): Dog // covariance (mengembalikan data yang lebih spesifik dari return parentnya)
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}
