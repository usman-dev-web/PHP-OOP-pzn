<?php

// EXCEPTION
/**
 * saat kita membuat aplikasi, kita tidak bisa terhindar dengan yang namanya error
 * di php, error direpresentasikan dengan istilah exception dan semua direpresentasikan dalam bentuk class exception
 * kita bisa menggunakan class exception sediri, atau menggunakan yang sudah disediakan oleh php
 * jika kita ingin membuat exception, maka kita harus membuat class yang implements interface Throwable atau turunan turunannya
 */

 // membuat class exception sendiri dengan nama ValidationException yang extends Exception
 class ValidationException extends Exception{
    
 }