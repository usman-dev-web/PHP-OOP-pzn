<?php

// REGULER EXPRESSION
/**
 * php mendukung reguler expression yang kompatibel dengan pemrograman perl
 * reguler expression merupakan fitur yang digunakan untuk melakukan pencarian di string menggunakan pola tertentu
 * materi ini sebenarnya materti yang sangat panjang, sehingga disini kita akan bahas sedikit pengenalannya
 * untum pembuatan pattern di reguler expression, detailnya bisa dibaca disini:
 * https://www.php.net/manual/en/pcre.pattern.php
 */

 // FUNCTION REGULER EXPRESSION
 /**
  * preg_match($pattern, $subject) | digunakan untuk mencari match pattern
  * preg_match_all($pattern, $subject) | digunakan untuk mencari match pattern
  * preg_replace($pattern, $replacment, $subject) | digunakan untuk mereplace semua pattern dengan replacment
  * preg_split($pattern, $subject) | digunakan untuk memotong dengan pattern menjadi array
  */

  // kode reguler expression match
  $matches = []; // pattern yang match akan di masukan ke sini
  $result = preg_match_all("/us|man|an|eko/i", "M Usman Maulana", $matches); // mencari pattern yang
  var_dump($result);
  var_dump($matches);

  // kode reguler expression replace
  $result = preg_replace("/anjing|babi|bangsat/i", "***", "dasar lu ANJING BANGSAT"); // mereplace pattern
  var_dump($result);

  // kode reguler expression split
  $result = preg_split("/[\s,-]/", "M-Usman,maulana");
  var_dump($result);