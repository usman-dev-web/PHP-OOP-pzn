<?php

// TRAIT ABSTRACT FUNCTION
/**
 * selain konkrit function, di trait juga kita bisa menambahkan abstract function
 * jika terdapat abstract function di trait, maka secara otomatis function tersebut harus di override di class yang menggunakan trait tersebut
 */

// TRAIT OVERRIDING
/**
 * jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait,
 * maka secara otomatis trait akan meng-override function tersebut
 * namun jika kita membuat function yang sama di classnya, maka secara otomatis kita akan meng-override function di trait
 * sehingga posisinya seperti ini ParentClass=OverrideBy=>Trait=OverrideBy=>ChildClass
 */

 // TRAIT VISIBILITY OVERRIDE
 /**
  * selain melakukan override function di class, kita juga bisa melakukan override visibility function yang terdapat di trait
  * namun untuk melakukan ini tidak perlu membuat function baru di class, kita bisa gunakan secara sederhana ketika menggunakan trait nya
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
trait SayHello{
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

// membuat trait abstract function
trait CanRun{
    // menambahkan abstract function pada trait
    public abstract function run():void;
}

// membuat ParentClass
// function yang ada di ParentClass akan ter-override oleh function yang ada di trait
class ParentClass{
    public function goodBye(?string $name): void
    {
        echo "GoodBye in ParentClass" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in ParentClass" . PHP_EOL;
    }
}

// membuat class dengan menginclude semua trait menggunakan kata kunci use
class Person extends ParentClass{
    // menambahkan function visibility override menggunakan tanda {} dan kata kunci as
    use SayGoodBye, SayHello, Name, CanRun{
        // hello as private;
        // goodBye as private;
    }

    // mengoverride abstract function run
    public function run(): void
    {
        echo "Person {$this->name} is running" . PHP_EOL;
    }

    // meng-override function yang ada di trait sayGoodBye dan SayHello
    // function yang ada di trait akan ter-override oleh class yang menggunakannya
    public function goodBye(?string $name): void
    {
        echo "GoodBye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}