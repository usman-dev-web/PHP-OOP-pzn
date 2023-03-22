<?php

// membuat class yang isinya terdapat function construct
class Construct{
    // menambahkan properties
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";


    // function __construct adalah function yang akan dipanggil pertama kali saat sebuah object dibuat
    function __construct(string $name, ?string $address)
    {
        $this->name = $name; // name diproperti dimanipulasi menjadi name yang ada diparameter 
        $this->address = $address; // address diproperti dimanipulasi menjadi address yang ada di parameter
    }
}