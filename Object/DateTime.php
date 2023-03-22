<?php

// DATE TIME
/**
 * biasanya dalam bahasa pemrograman sudah disediakan cara untuk memanipulasi waktu, termasuk di php
 * di php, kita bisa menggunakan class DateTime untuk memanipulasi data waktu
 * ada banyak sekali function di class DateTime yang bisa kita gunakan untuk memanipulasi data waktu
 */

// DateTime FUNCTION
/**
 * setTime($hour, $minute, $second) | Mengubah waktu DateTime
 * setDate($year, $month, $day) | Mengubah tanggal DateTime
 * setTimestamp($unixTimestamp) | Mengubah unix timestamp DateTime
 */

// DateInterval
/**
 * kadang kita hanya ingin memanipulasi waktu dan tanggal sebagian saja, misal hanya menambah 1 tahun atau mengurangi beberapa hari
 * hal ini bisa dilakukan dengan function add milik class DateTime
 * namun function add tersebut menerima parameter berupa DateInterval
 * saat menggunakan DateInterval duration, kita perlu menentukan berapa banyak kita menambah interval
 * kita bisa lihat detailnya disini : https://www.php.net/manual/en/dateinterval.construct.php
 * untuk pembuatan duration, harus diawali dengan karakter P yang artinya period
 */

// DateTimeZone
/**
 * saat kita membuat object DateTime, dia akan secara otomatis membuat waktu saat ini sesuai dengan timezone yang disetting di konfigurasi date.timezone di file php.ini
 * atau kita bisa menggunakan function setTimeZone untuk mengubah timezone DateTime
 */

// format DateTime
/**
 * kadang kita ingin membuat representasi string dari DateTime yang sudah kita buat
 * hal ini bisa kita lakukan menggunakan function format()
 * function format() menerima argument berupa format string, ini bisa kita gunakan untuk memanipulasi 
 * cara kita menampilkan string format waktu
 * untuk detailnya kita bisa lihat di halaman dokumentasi resminya
 * https://www.php.net/manual/en/datetime.format.php
 */

// Parse DateTime
/**
 * selain format DateTime menjadi string, di php juga kita bisa melakukan hal sebaliknya, yaitu memparsing string menjadi DateTime sesuai dengan format yang kita mau
 * untuk melakukan itu, kita bisa menggunakan static function createFromFormat() dari class DateTime
 */

// kode DateTime
$date = new DateTime();
$date->setDate(2002, 05, 25); // mengubah Tanggal
$date->setTime(20, 30, 10, 0); // mengubah waktu
var_dump($date);

// kode DateInterval
$date->add(new DateInterval("P1Y")); // menambah duration 1 year
$dateInterval = new DateInterval("P1M"); // menambah duration 1 month
$dateInterval->invert = 1; // mengurangi duration 1 month, kebalikan dari function DateInterval
$date->add($dateInterval); // menambahkan $dateInterval kedalam objcet $date menggunakan function add milik class DateTime
var_dump($date);

// kode DateTimeZone
$dtz = new DateTime();
$dtz->setTimezone(new DateTimeZone("America/Toronto")); // mengubah time zone
var_dump($dtz);

// kode Format DateTime
$fdt = new DateTime();
$fdt->setTimezone(new DateTimeZone("Asia/Jakarta")); // mengubah time zone
$string = $fdt->format("Y-m-d H:i:s") . PHP_EOL; // menampilkan string format waktu
echo "Waktu saat ini : $string" . PHP_EOL;

// kode Parse DateTime
$parseDateTime = new DateTime();
$parseDateTime = DateTime::createFromFormat("Y-m-d", "2002-05-25", new DateTimeZone("Asia/Jakarta"));
if ($parseDateTime) {
    var_dump($parseDateTime);
} else {
    echo "Format salah" . PHP_EOL;
}
