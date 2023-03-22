<?php

// membuat namespace yang mempunyai function dan constant

namespace Helper{

    // membuat function didalam namespaces
    function helpMe(){
        echo "Help Me Learn PHP" . PHP_EOL;
    }

    function sayHello(string $name){
        echo "Hello $name" . PHP_EOL;
    }

    // membuat constant didalam namespaces
    const APPLICATION = "Belajar PHP OOP";
}