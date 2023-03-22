<?php

// TRAIT
/**
 * selain class dan interface, di php terdapat featur lain bernama trait
 * trait mirip seperti abstract class, kita bisa membuat konkrit function atau abstract function
 * yang membedakan adalah di trait bisa kita tambahkan ke dalam class lebih dari satu
 * trait mirip seperti extension, dimana kita bisa menambahkan konkrit function kedalam class dengan trait
 * secara sederhana trait adalah digunakan untuk menyimpan function function yang bisa digunakan ulang di beberapa class
 * untuk menggunakan trait di class, kita bisa menggunakan kata kunci use
 */

namespace Data\Traits;
trait SayGoodBye{
    // menambahkan properti kedalam trait
    public string $name;

    // membuat class konkrit di dalam trait
    public function goodBye(?string $name):void{
        if(is_null($name)){
            echo "GoodBye" . PHP_EOL;
        }else{
            echo "GoodBye $name" . PHP_EOL;
        }
    }

}

// membuat trait
trait sayHello{
    public function hello(?string $name):void{
        if(is_null($name)){
            echo "Hello" . PHP_EOL;
        }else{
            echo "Hello $name" . PHP_EOL;
        }
    }
}

// trait hanya punya satu properties
trait Name{
    public string $name; // properties
}

// membuat class dengan menginclude semua trait menggunakan kata kunci use
class Person{
    use SayGoodBye, sayHello, Name;
}