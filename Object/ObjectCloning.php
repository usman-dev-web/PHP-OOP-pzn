<?php

// OBJECT CLONING
/**
 * kadang kita ada kebutuhan untuk menduplikasi sebuah object
 * biasanya untuk melakukan hal ini, kita bisa membuat object baru lalu menyalin semua properties di object awal ke object baru
 * untungnya di php mendukung object cloning
 * kita bisa menggunakan perintah clone untuk membuat duplikasi object
 * secara otomatis semua properties di object awal akan di duplikasi ke object baru
 */

 // __clone() FUNCTION
 /**
  * kadang menyalin semua properties bukanlah yang kita inginkan
  * misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya
  * jika kita ingin memodifikasi cara php melakukan clone, kita bisa membuat function didalam classnya dengan nama function __clone()
  * function __clone() akan dipanggil di object hasil duplikasi setelah proses duplikasi selesai
  * jadi jika ingin menghapus beberapa properties, bisa kita lakukan di function __clone()
  */

 require_once __DIR__ . "/../Class/Student.php";

 $student1 = new Student();
 $student1->id = "1";
 $student1->name = "Usman";
 $student1->value = 100;
 $student1->setSample("contoh");
 var_dump($student1);

 // melakukan duplikasi secara otomatis menggunakan kata kunci clone
 $student2  = clone $student1; // semua properties dan value dari $student1 akan diduplikasi ke $student2
 var_dump($student2);

 // $student1 => clone $student2 => $student2->__clone() 
 $student3  = clone $student1; // semua properties dan value dari $student1 akan diduplikasi ke $student2 kecuali properties $sample karena tidak diinginkan
 var_dump($student3);