<?php

require_once __DIR__ . "/../Class/Programmer.php";
// polymorphism
/**
 * polymorphism berasal dari bahasa yunani yang berarti banyak bentuk
 * dalam oop, polymorphism adalah kemampuan sebuah object berubah bentuk menjadi bentuk lain
 * polymorphism erat hubungannya dengan inheritance
 */

 // membuat object company
 $company = new Company();
 // membuat object company menjadi bentuk object lain
 $company->programmer = new Programmer("Usman"); // berubah menjadi object programmer
 var_dump($company);
 $company->programmer = new BackendProgrammer("Usman"); // berubah menjadi object backendprogrammer
 var_dump($company);
 $company->programmer = new FrontEndProgrammer("Usman"); // berubah menjadi object frontendprogrammer
 var_dump($company);

 // mengakses function argument polymorphism
 sayHelloProgrammer(new BackEndProgrammer("Usman"));
 sayHelloProgrammer(new FrontEndProgrammer("Usman"));
 sayHelloProgrammer(new Programmer("Usman"));