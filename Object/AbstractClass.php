<?php

require_once __DIR__ . "/../NameSpaces/Abstrack.php";

// mencoba membuat object dari abstract class Location
use \Abstract\{Location, City, Province};
// $location = new Location(); // error, tidak bisa dibuat object karena Abstract class

// akses class turunan dari Location
$city = new City(); // kelas turunan bisa diakses karena bukan abstract class
$province = new Province(); // kelas turunan bisa diakses karena bukan abstract class