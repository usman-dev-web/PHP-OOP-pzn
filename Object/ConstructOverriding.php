<?php

require_once __DIR__ . "/../Class/Manager.php";

// membuat object manager
$manager = new Manager();
$manager->name = "Adit";
echo $manager->sayHello("Usman");

// membuat object vp
$vp = new VicePresident();
$vp->name = "Febri";
echo $vp->sayHello("Eko");