<?php

// ANONYMOUS CLASS
/**
 * anonymous class atau class tanpa nama
 * adalah kemampuan mendeklarasikan class sekaligus menginstansiasi objectnya secara langsung
 * anonymous class sangat cocok ketika kita berhadapan dengan kasus membuat implementasi interface
 * atau abstract class sederhana tanpa harus membuat implementasi classnya
 */

// CONSTRUCTOR DI ANONYMOUS CLASS
/**
 * anonymous class juga mendukung constructor
 * jadi kita bisa menambahkan constructor jika kita mau
 */

// kode anonymous function
interface HelloWord
{
   function sayHello(): void;
}

// membuat anonymous class yang langsung implementasi interface menggunakan kata kunci new class implements
$helloWord = new class("Anonymous Class") implements HelloWord
{

   // membuat properties
   private string $name;

   // membuat function construct
   public function __construct(string $name)
   {
      $this->name = $name;
   }

   function sayHello(): void
   {
      echo "Hello World $this->name" . PHP_EOL;
   }
};

$helloWord->sayHello();
