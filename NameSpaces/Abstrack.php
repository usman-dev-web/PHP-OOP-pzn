<?php


// membuat abstract class
/**
 * abstract class artinya, class tersebut tidak bisa dibuat sebagai object secara langsung, hanya bisa diturunkan
 * untuk membuat sebuah abstract class, kita bisa menggunakan kata kunci abstract sebelum kata kunci class
 * sehingga abstract class bisa kita gunakan sebagai kontrak child class
 */

 // membuat namespaces Abstract
namespace Abstract;
// class ini tidak bisa dijadikan object
abstract class Location{
    public string $name; // properties name
}

// class turunan dari Location
class City extends Location{

}

class Province extends Location{
    
}