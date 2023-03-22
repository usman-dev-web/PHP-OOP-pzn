<?php

require_once __DIR__ . "/../Exception/ValidationException.php";
require_once __DIR__ . "/../Class/LoginRequest.php";
// MEMBUAT EXCEPTION
/**
 * exception biasanya terjadi di function
 * di dalam kode program kita, untuk membuat exception kita cukup menggunakan kata kunci throw diikuti dengan object exceptionnya
 */

 // kode membuat exception
 // function dengan type data dari sebuah class 
 // function yang bisa menyebabkan terjadi exception
 function validateLoginRequest(LoginRequest $loginRequest){
    // cek apakah username di isi
    if(!isset($loginRequest->username)){
        throw new ValidationException("Username is Null"); // memanggil exception menggunakan kata kunci throw new diikuti nama objcet exceptionnya
    }else if(!isset($loginRequest->password)){
        throw new ValidationException("Password is Null"); // memanggil exception menggunakan kata kunci throw new diikuti nama objcet exceptionnya
    }else if(trim($loginRequest->username) == ""){
        throw new Exception("Username is blank"); // memanggil exception menggunakan kata kunci throw new diikuti nama objcet exceptionnya
    }else if(trim($loginRequest->password) == ""){
        throw new Exception("Password is blank"); // memanggil exception menggunakan kata kunci throw new diikuti nama objcet exceptionnya (Exception object bawaan php)
    }
 }