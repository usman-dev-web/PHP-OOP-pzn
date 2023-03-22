<?php

// FINAL CLASS
/**
 * kata kunci final bisa digunakan di class, dimana jika kita menggunakan kata kunci final sebelum class,
 * maka kita menandakan bahwa class tersebut tidak bisa diwariskan lagi
 * secara otomatis semua class childnya akan error
 */

// kode final class
class SocialMedia{
    public string $name;
}

// ketika class ditambahkan kata kunci final, maka class ini tidak bisa diturunkan lagi
final class Facebook extends SocialMedia{

}

// ini akan error karena mengextends ke class Facebook yang merupakan final class
// class FaceFb extends Facebook{

// }