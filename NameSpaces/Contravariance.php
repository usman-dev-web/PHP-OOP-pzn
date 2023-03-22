<?php

// CONTRAVARIANCE
/**
 * sedangkan contravariance adalah memperbolehkan sebuah child class untuk membuat function argument yang lebih tidak spesifik
 * dibandingkan parent nya
 */

// kode inherintace
namespace Animal;

class Food // parent class
{
}

class AnimalFood extends Food // child class
{
}
