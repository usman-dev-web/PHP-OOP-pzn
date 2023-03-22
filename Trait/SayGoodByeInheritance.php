<?php

// TRAIT INHERITANCE
/**
 * trait bisa menggunakan trait lain, mirip seperti interface yang bisa implements interface lain
 * untuk menggunakan trait lain dari trait, penggunaannya sama seperti dengan penggunaan trait di class
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

// membuat trait yang isinya menginclude trait lain
trait All{
    use SayGoodBye, SayHello, Name;
}

// membuat class dengan menginclude semua trait menggunakan kata kunci use
class Person{
    use All;
}