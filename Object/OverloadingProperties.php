<?php

// OVERLOADING
/**
 * overloading adalah kemampuan secara dinamis membua properties atau function
 * ini mirip meta programming di bahasa pemrograman lain seperti ruby
 * namun ini berbeda dengan function overloading di bahasa pemrograman java
 * overloading ini erat kaitannya dengan magic function yang sebelumnya sudah kita bahas
 */

// PROPERTIES OVERLOADING
/**
 * saat kita mengakses properties, maka secara otomatis properties akan diakses
 * namun jika properties tersebut tidak tersedia di objectnya, maka php tidak secara otomatis menjadikan itu error
 * php akan melakukan fallback ke magic function
 * dengan demikian kita bisa membuat properties secara dinamis dengan memanfaatkan magic function tersebut
 * ada beberapa magic function yang bisa kita gunakan untuk properties overloading
 */

// MAGIC FUNCTION UNTUK PROPERTIES OVERLOADING
/**
 * __set($name, $value):void | Dieksekusi ketika mengubah properties yang tidak tersedia
 * __get($name):mixed | Dieksekusi ketika mengakses properties yang tidak tersedia
 * __isset($name):bool | Dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia
 * __unset($name):void | Dieksekusi ketika menggunakan unset() properties yang tidak tersedia
 */

// kode properties overloading
class Zero
{
    // membuat properties private untuk menampung data
    private array $properties = [];

    // Dieksekusi ketika mengakses properties yang tidak tersedia
    public function __get($name)
    {
        return $this->properties[$name];
    }

    // Dieksekusi ketika mengubah properties yang tidak tersedia
    public function __set($name, $value)
    {
        return $this->properties[$name] = $value;
    }

    // Dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia
    public function __isset($name): bool
    {
        return $this->properties[$name];
    }

    // Dieksekusi ketika menggunakan unset() properties yang tidak tersedia
    public function __unset($name): void
    {
        $this->properties[$name];
    }
}

// membuat instansiasi dari class Zero
$zero = new Zero();
$zero->name = "Usman"; // set properties yang tidak tersedia di class dan langsung mengubah valuenya
$zero->age = 20; // set properties yang tidak tersedia di class dan langsung mengubah valuenya
$zero->address = "Pandeglang"; // set properties yang tidak tersedia di class dan langsung mengubah valuenya

// get properties dan value nya
echo "Name : $zero->name" . PHP_EOL;
echo "Age : $zero->age" . PHP_EOL;
echo "Address : $zero->address" . PHP_EOL;