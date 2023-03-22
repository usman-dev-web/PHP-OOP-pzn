<?php

// membuat parent class programmer
class Programmer
{

    public string $name; // properties name

    // function construct
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

// class child dari Programmer
class BackendProgrammer extends Programmer
{
}

// class child dari Programmer
class FrontEndProgrammer extends Programmer
{
}

// class untuk melakukan polymorphism
class Company
{
    // membuat properties dengan tipe data Programmer (class Programmer)
    public Programmer $programmer;
}

// function argumemt polymorphism dengan tipe data parameter Programmer(class Programmer)
function sayHelloProgrammer(Programmer $programmer){
    // melakukan pengecekan tipe data object dengan menggunakan kata kunci instaceof
    // hasil operator instanceof adalah boolean, true jika tipe data sesuai, false jika tipe data tidak sesuai
    if($programmer instanceof BackendProgrammer){
        echo "Hello BackEndProgrammer $programmer->name" . PHP_EOL;
    }else if($programmer instanceof FrontEndProgrammer){
        echo "Hello FrontEndProgrammer $programmer->name" . PHP_EOL;
    }else if($programmer instanceof Programmer){
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}