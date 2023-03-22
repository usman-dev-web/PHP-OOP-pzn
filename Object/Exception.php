<?php

require_once __DIR__ . "/../Utility/ValidateLoginRequest.php";
require_once __DIR__ . "/../Class/LoginRequest.php";
require_once __DIR__ . "/../Exception/ValidationException.php";

// membuat object dari exception
// $login = new LoginRequest(); // tidak error karena semua di isi
// $login->username = "Usman";
// $login->password = "Usman";
// validateLoginRequest($login);

// membuat yang error
// $error = new LoginRequest(); // error karena username dan password tidak di isi
// validateLoginRequest($error);

// Try Catch
/**
 * saat kita memanggil sebuah function yang bisa menyebabkan exception, maka kita disarankan menggunakan try-catch expression di php
 * ini gunanya agar kita bisa menangkap exception yang terjadi, karena jika tidak ditangkap lalu terjadi exception
 * maka secara otomatis program kita akan berhenti
 * cara menggunakan try-catch expression di php sangat mudah, di blok try kita tinggal panggil method yang bisa menyebabkan exception
 * dan di blok catch kita bisa melakukan sesuatu jika terjadi exception
 */

// Finally Keyword
/**
 * dalam try-catch kita bisa menambahkan block finally
 * block finally ini adalah block dimana akan selalu dieksekusi baik terjadi exception ataupun tidak
 * ini sangat cocok ketika kita ingin melakukan sesuatu, tidak peduli sukses ataupun gagal, ini juga berguna untuk menutup koneksi ke file agar tidak terjadi memory leak
 */

 // debug exception
 /**
  * exception di php memiliki sebuah function bernama getTrace()
  * function getTrace() berisikan informasi dari exception yang terjadi, seperti lokasi file, baris ke berapa, function mana sampai argument yang dikirim di function tersebut apa
  * ini sangat cocok untuk kita jika ingin mendebug ketika terjadi exception
  */

// kode try catch
// $tryCatch = new LoginRequest();
// $tryCatch->username = "";
// $tryCatch->password = "";
// // membuat kode try catch 1
// try {
//     validateLoginRequest($tryCatch); // method yang bisa menyebabkan exception
// } catch (ValidationException $exception) { // ditangkap oleh catch yang berisi object exception yang kita buat sendiri
//     echo "Error : {$exception->getMessage()}" . PHP_EOL;
// } catch (Exception $exception) { // ditangkap oleh catch yang berisi object exception yang kita buat sendiri
//     echo "Error : {$exception->getMessage()}" . PHP_EOL;
// }

// try catch 2 ditambah dengan finally keyword dan debug excepttion
$tc = new LoginRequest();
$tc->username = " ";
$tc->password = " ";
try{
    validateLoginRequest($tc); // function validationLoginRequest sebagai function yang bisa menyebabkan exception
    echo "Valid" . PHP_EOL;
}catch(ValidationException | Exception $exception){ // multiple catch. 

    // debug exception
    echo $exception->getTraceAsString() . PHP_EOL; // ini akan menjadi string
    var_dump($exception->getTrace()); // ini akan menjadi array
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

}finally{
    echo "Error atau tidak akan tetap dieksekusi" . PHP_EOL;
}