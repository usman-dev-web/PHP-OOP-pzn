<?php

// membuat namespace data
namespace Data;

class Shape // parent class
{
    function getCorner(): int
    {
        return 0;
    }
}

// class turunan dari class Shape
class Rectangle extends Shape // child class
{
    // override function getCorner
    function getCorner(): int
    {
        return 4;
    }

    // untuk mengakses function di parent class
    function getParentCorner(): int
    {
        // untuk mengakses class parent, menggunakan kata kunci parent
        return parent::getCorner();
    }
}
