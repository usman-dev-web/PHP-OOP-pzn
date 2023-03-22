<?php

require_once __DIR__ . "/../Class/Manager.php";

// class parent
$manager = new Manager();
$manager->name = "Usman";
echo $manager->sayHello("Eko");

// class child
$vp = new VicePresident();
$vp->name = "Eko";
echo $vp->sayHello("Usman");