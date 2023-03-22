<?php

// FUNCTION OVERLOADING
/**
 * saat kita mengakses function, maka secara otomatis function akan diakses
 * namun jika ternyata function tersebut tidak tersedia di objectnya, maka php tidak secara otomatis menjadikan itu error
 * php akan melakukan fallback ke magic function
 * dengan demikian kita bisa membuat function secara dinamis dengan memanfaatkan magic function tersebut
 * ada beberapa magic function yang bisa kita gunakan untuk function overloading
 */


// MAGIC FUNCTION UNTUK FUNCTION OVERLOADING
/**
 * __cal($name, $arguments):mixed | Dieksekusi ketika memanggil function yang tidak tersedia
 * __callStatic($name, $arguments):mixed | Dieksekusi ketika memanggil static function yang tidak tersedia
 */

class Zero
{

    // Dieksekusi ketika memanggil function yang tidak tersedia
    public function __call($name, $arguments)
    {
        $join = join(", ", $arguments);
        echo "Memanggil function $name dengan arguments $join" . PHP_EOL;
    }

    // Dieksekusi ketika memanggil static function yang tidak tersedia
    public static function __callStatic($name, $arguments)
    {
        $join = join(", ",  $arguments);
        echo "Memanggil function static $name dengan arguments $join" . PHP_EOL;
    }
}

// membuat object dari class Zero
$zero = new Zero();
$zero->sayHello("Usman", "Maulana"); // membuat function yang tidak tersedia di class
Zero::sayHello("Usman", "Ganteng"); // membuat static function yang tidak tersedia di class