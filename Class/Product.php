<?php

// membuat class dengan menambahkan visibility pada properties dan function
class Product{

    // menambahkan properties dengan visibility private yang hanya bisa diakses didalam class ini saja
    private string $name;
    private int $price;

    // membuat function construct dengan visibility public
    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // membuat function untuk mendapatkan value dari $name
    public function getName() : string{
        return $this->name;
    }

    // membuat function untuk mendapatkan value dari $price
    public function getPrice() : int{
        return $this->price;
    }

    public function getInfo(){
        echo "Buah $this->name harganya $this->price" . PHP_EOL;
    }
}