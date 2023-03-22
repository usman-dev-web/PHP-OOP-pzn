<?php

// __invoke() function
/**
 * __invoke() merupakan function yang di eksekusi ketika object yang kita buat dianggap sebagai function
 * misal ketika kita membuat object $student, lau kita melakukan $student(), maka secara otomatis function __invoke() yang akan di eksekusi
 */

require_once __DIR__ . "/../Class/Student.php";

$student = new Student();
$student->id = "1";
$student->name = "Usman";
$student->value = 100;
$student->setSample("TEST");

// mencoba invoke function, invoke function mirip seperti variable function
$student("Usman", "Ganteng");