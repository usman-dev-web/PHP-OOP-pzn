<?php

// TRAIT CONFLICT
/**
 * jika kita menggunakan lebih dari satu trait, lalu terdapat function yang sama di trait tersebut
 * maka hal tersebut akan menyebabkan konflik / error
 * jika terjadi seperti ini, kita bisa mengatasinya dengan menggunakan kata kunci insteadof(memilih salah satu)
 */

// kode trait conflict
trait A
{
    function doA()
    {
        echo "a" . PHP_EOL;
    }
    function doB()
    {
        echo "b" . PHP_EOL;
    }
}
trait B
{
    function doA()
    {
        echo "A" . PHP_EOL;
    }
    function doB()
    {
        echo "B" . PHP_EOL;
    }
}

class Sample{
    // include trait
    use A,B{
        // trait A akan memilih function yang ada di trait A daripada function di trait B
        A::doB insteadOf B;
        // A::doB insteadOf B;

        // trait B akan memilih function yang ada di trait B daripada function di trait A
        B::doA insteadOf A;
        // B::doB insteadOf A;
    }
}

// membuat object dari class Sample
$sample = new Sample();
$sample->doB();
$sample->doA();