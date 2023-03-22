<?php

require_once __DIR__ . "/../Trait/SayGoodByeInheritance.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

// membuat object dari class person
$person = new Person();
$person->hello("Usman");
$person->goodBye("Adit");
echo $person->name = "Eko" . PHP_EOL;
// var_dump($person);
