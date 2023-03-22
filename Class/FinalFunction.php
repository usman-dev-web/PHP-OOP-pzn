<?php

// FINAL CLASS
/**
 * kata kunci final juga bisa digunakan di function
 * jika sebuah function ditambahkan kata kunci final, maka artinya function tersebut tidak bisa di override lagi di class childnya
 * ini sangat cocok jika kita mengunci implementasi dari sebuah method agar tidak bisa diubah lagi oleh class childnya
 */

class SocialMedia{
    public string $name;
}

class Facebook extends SocialMedia{
    final public function login(string $name, string $password) : void{

    }
}

class FaceFb extends Facebook{
    // tidak bisa mengoverride function di parent class karena sudah di set sebagai final function
    // public function login(){

    // }
}