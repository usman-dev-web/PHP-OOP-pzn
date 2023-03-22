<?php

// OBJECT ITERATION
/**
 * saat kita membuat object dari sebuah class, kita bisa melakukan iterasi ke semua properties yang terdapat di object tersebut menggunakan foreach
 * hal ini mempermudah kita saat ingin mengakses semua properties yanga ada di object
 * secara default, hanya properties yang public yang bisa diakses oleh foreach
 */

// ITERATOR
/**
 * sebelumnya kita melakukan iterasi data di properties secara otomatis menggunakan foreach
 * jika kita ingin menangani secara manual. kita bisa menggunakan iterator
 * iterator adalah interface yang digunakan untuk melakukan iterasi, namun membuat iterator secara manual lumayan cukup ribet,
 * oleh karena itu kita akan gunakan ArrayIterator, yaitu iterator yang menggunakan array sebagai data iterasinya,
 * dan agar class bisa di iterasi secara manual, kita bisa menggunakan interface iteratorAggregate, disana kita hanya butuh mengoverride function getIterator() yang
 * mengembalikan data Iterator
 */

// kode object iteration
class Data
{
    // menambahkan properties
    var string $first = "First";
    public string $second = "Second";
    protected string $third = "Third";
    private string $forth = "Forth";
}

// membuat instansiasi dari class Data
$data = new  Data();
// melakukan iterasi menggunakan foreach
foreach ($data as $properties => $value) {
    echo "$properties : $value" . PHP_EOL;
}

// kode object iteration secara manual menggunakan menggunakan iterator
class DataIterator implements IteratorAggregate
{
    // menambahkan properties
    var string $first = "First";
    public string $second = "Second";
    protected string $third = "Third";
    private string $forth = "Forth";

    // menambahkan function bawaan php
    public function getIterator() : Iterator
    {
        // membuat array sebagai data iterasinya
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth,
        ];

        // mengembalikan data iterator
        return new ArrayIterator($array);
    }
}

$dataIterator = new DataIterator();
foreach ($dataIterator as $properties => $value) {
    echo "$properties : $value" . PHP_EOL;
}
