<?php

// mengakses constant di dalam class
require_once __DIR__ . "/../Class/Person.php";

// karena constant hidupnya di dalam class bukan di dalam function, jadi ketika mengkasesnya kita tidak perlu membuat object terlebih dahulu
// kita menggunakan :: untuk mengakses constant yang berada langsung di dalam class
echo Person::AUTHOR . PHP_EOL;