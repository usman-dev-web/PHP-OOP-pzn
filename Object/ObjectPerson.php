<?php

// membuat object
/**
 * object adalah hasil instansiasi dari sebuah class
 * untuk membuat object kita bisa menggunakan kata kunci new, dan diikuti dengan nama Class dan kurung()
 */

 // instansiasi dari class person
 require_once __DIR__ . "/../Class/Person.php";
 $person1 = new Person();
 var_dump($person1);