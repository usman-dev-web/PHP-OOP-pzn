<?php

// membuat class Person
class Person{
    // menambahkan constant(data yang tidak bisa diubah valuenya) di dalam class
    const AUTHOR = "M Usman Maulana";
   
    // menambahkan properties/field
    var string $name; // menambahkan type declaration string setelah kata kunci var
    var ?string $address = null; // menambahkan type declaration string setelah kata kunci var dan menambahkan Nullable Properties
    var string $country = "Indonesia"; // menambahkan type declaration string setelah kata kunci var dan menambahkan properties default value = "Indoensia"

    // menambahkan function didalam Class
    function sayHello(?string $name){

        // menambahkan This Keyword untuk mengakses object saat ini
        if(is_null($name)){
            echo "Hi, my name is $this->name" . PHP_EOL;
        }else{
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    // self keyword untuk mengakses constant di class yang sama
    function info(){
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }
}