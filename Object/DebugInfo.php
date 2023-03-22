<?php

// __debugInfo() function
/**
 * sebelumnya kita sering melakukan debug variable menggunakan function var_dump()
 * function var_dump() sebenarnya memanggil function __debugInfo()
 * jika kita ingin mengubah isi dari debug info, kita bisa membuat function __debugInfo()
 */

require_once __DIR__ . "/../Class/Student.php";

$student = new Student();
$student->id = "1";
$student->name = "Usman";
$student->value = 100;
$student->setSample("TEST");

// ketika mendebug menggunakan var_dump(), var_dump() akan memanggil function __debugInfo() yang berada di dalam class
var_dump($student);