<?php

/**
 * stdClass adalah sebuah class kosong bawaan dari php
 * stdClass biasanya digunakan ketika kita melakukan konversi dari tipe lain menjadi tipe object
 * stdClass sangat berguna ketika misal kita ingin melakukan konversi dari tipe data array ke object secara otomatis
 */

// kode konversi array ke stdClass
$array = [
    "firstName" => "M", // key "fistName" akan menjadi properti ketika di konversi ke object
    "middleName" => "Usman", // key "middleName" akan menjadi properti ketika di konversi ke object
    "lastName" => "Maulana",  // key "lastName" akan menjadi properti ketika di konversi ke object
];

// mengubah array menjadi object
$object = (object)$array;
var_dump($object);

// mengakes tipe data array yang sudah di konversi menjadi object
echo "First Name : $object->firstName" . PHP_EOL;
echo "Middle Name : $object->middleName" . PHP_EOL;
echo "Last Name : $object->lastName" . PHP_EOL;