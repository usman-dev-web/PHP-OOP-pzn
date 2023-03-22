<?php

// REFLECTION
/**
 * reflection adalah membaca struktur kode pada saat aplikasi sedang berjalan
 * reflection adalah materi yang sangat panjang dan banyak, sehingga disini akan membahas perkenalannya saja
 * reflection adalah fitur yang biasanya digunakan saat kita membuat framework
 * https://www.php.net/manual/en/book.reflection.php
 */
class ValidationUtils{

    // kode validation tanpa replection
    static function validate(LoginRequest $loginRequest){
        if(is_null($loginRequest->username)){
            throw new ValidationException("username is null");
        }else if(is_null($loginRequest->password)){
            throw new ValidationException("password is null");
        }
    }

    // kode validation menggunakan reflection
    // cukup membuat satu function validasi. bisa digunakan untuk semua object tanpa harus membuat validasi lagi
    // reflection membuat validasi yang general
    static function validateReflection($request){
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach($properties as $property){
            if(!$property->isInitialized($request)){
                throw new ValidationException("$property->name is not set");
            }else if(is_null($property->getValue($request))){
                throw new ValidationException("$property->name is null");
            }
        }
    }
}