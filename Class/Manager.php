<?php

// membuat class Manager yang akan diwariskan ke class VicePresident
class Manager{
    // menambahkan properties
    var string $name, $title;
    
    // menambah function construct
    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    // membuat function sayHello yang tidak mengembalikan value
    function sayHello(string $name) :void{
        echo "Hi $name, My name is Manager $this->name" . PHP_EOL;
    }
}

// membuat class turunan dari class Manager
class VicePresident extends Manager{
    // secara otomatis semua properti dan function yang ada di class manager akan diwariskan ke class turunannya
    // class parent boleh memiliki banyak kelas child, namun class child hanya boleh punya satu class parent

    // override function construct milik class manager
    public function __construct(string $name = "")
    {
        // disarankan untuk memanggil parent function construct, tetapi tidak wajib
        parent::__construct($name, "VP");
    }

    // Function overriding
    /**
     * function overriding adalah kemampuan untuk mendeklarasikan ulang function di child class, yang sudah ada di parent class
     * saat kita melakukan prosess overriding tersebut, secara otomatis ketika kita membuat object dari class child, function di class parent tidak bisa diakses lagi
     */

    // Override function sayHello 
    function sayHello(string $name): void
    {
        echo "Hi $name, My name is VP $this->name" . PHP_EOL;
    }
}