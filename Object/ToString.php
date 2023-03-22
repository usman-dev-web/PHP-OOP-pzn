<?php

// __toString() function
/**
 * __toString() function merupakan salah satu magic function yang digunakan sebagai representasi string sebuah object
 * jika misal kita ingin membuat string dari object kita, kita bisa membuat function __toString()
 */

 require_once __DIR__ . "/../Class/Student.php";

 $student = new Student();
 $student->id = "1";
 $student->name = "Usman";
 $student->value = 100;
 $student->setSample("TEST");

// konversi dari object ke string
$string = (string) $student;
echo $string . PHP_EOL;

// atau bisa langsung seperti ini
echo $student . PHP_EOL;