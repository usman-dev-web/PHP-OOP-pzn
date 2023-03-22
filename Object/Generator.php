<?php

// GENERATOR
/**
 * sebelumnya kita tahu bahwa untuk membuat object yang bisa di iterasi, kita menggunakan iterator
 * namun pembuatan iterator secara manual sangatlah ribet
 * untuknya di php terdapat fitur generator, yang bisa kita gunakan untuk membuat iterator secara otomatis
 * hanya dengan menggunakan kata kunci yield
 */

// kode iterasi tanpa generator
function getGenap(int $max): iterator
{
    $genap = [];
    for($i = 1; $i <= $max; $i++){
        if($i % 2 == 0){
            $genap[] = $i;
        }
    }
    return new ArrayIterator($genap);
}

foreach(getGenap(100) as $value){
    echo "Genap : $value" . PHP_EOL;
}

// kode iterasi menggunakan generator (yield)
function getGanjil(int $max) : iterator{
    for($i = 1; $i <= $max; $i++){
        if($i % 2 == 1){
            yield $i; // ketika menggunakan yield, kita tidak harus membuat array dan return iteratornya
        }
    }
}

foreach(getGanjil(100) as $value){
    echo "Ganjil : $value" . PHP_EOL;
}