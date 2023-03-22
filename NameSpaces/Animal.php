<?php

// membuat namespace Animal
namespace Animal;
require_once __DIR__ . "/Contravariance.php";
// membuat abstract class
abstract class Animals{
    public string $name; // properties

    // membuat function abstract
    // saat membuat abstract function, kita tidak boleh menulis blok function tersebut
    // abstract function wajib di override di class child
    // abstract function tidak boleh memiliki access modifier private
    public abstract function run():void;

    // funtion contravariance
    public abstract function eat(AnimalFood $food):void;
}

// child class Animals
class Cat extends Animals{
    // override abstract function parent 
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    // override function parent
    public function eat(AnimalFood $food): void
    {
        echo "Cat is Eating" . PHP_EOL;
    }
}

// child class Animals
class Dog extends Animals{
    // override abstract function parent
    public function run(): void
    {
        echo "Dog $this->name is eating" . PHP_EOL;
    }

    // override function parent
    public function eat(Food $food): void
    {
        echo "Dog is Eating" . PHP_EOL;
    }
}