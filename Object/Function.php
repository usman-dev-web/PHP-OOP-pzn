<?php

// FUNCTION
/**
 * selain menambahkan properties, kita juga bisa menambahkan function ke object
 * dengan cara mendeklarasikan function tersebut di dalam block class
 * sama seperti function biasanya, kita bisa menambahkan return value dan parameter
 * untuk mengakses function tersebut, kita bisa menggunakan tanda -> dan diikuti dengan nama functionya, sama seperti mengakses properties
 */

 require_once __DIR__ . "/../Class/Person.php";
 $person = new Person();
 $person->name = "Usman";
 $person->address = "Pandeglang";
 
 echo $person->sayHello("Usman"); // mengakses function didalam class

 var_dump($person);