<?php

// memanggil class dengan function contructor di dalamnya
require_once __DIR__ . "/../Class/Constructor.php";


// function __construct adalah function yang akan dipanggil pertama kali saat sebuah object dibuat
$usman = new Construct("Usman", "Pandeglang");
var_dump($usman);