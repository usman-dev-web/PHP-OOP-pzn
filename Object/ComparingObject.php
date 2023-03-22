<?php

// COMPARING OBJECT
/**
 * sama seperti tipe data yang lain, untuk membandingkan dua buah object, kita bisa menggunakan operator == (equals), dan === (identity)
 * operator == membandingkan semua properties yang terdapat di object tersebut, dan tiap properties juga akan dibandingkan menggunakan operator ==
 * sedangkan operator === akan membandingkan apakah object indentik, artinya mengacu ke object yang sama
 */

 require_once __DIR__ . "/../Class/Student.php";

 $student1 = new Student();
 $student1->id = "1";
 $student1->name = "Usman";
 $student1->value = 100;

 $student2 = clone $student1;
 var_dump($student1 == $student2); // true, karena value propertiesnya sama
 var_dump($student1 === $student2); // false, karena meskipun value propertiesnya sama, dua buah object ini berbeda memory(tempat)
 var_dump($student1 === $student1); // true, karena dua buah object ini berada di memory(tempat) yang sama