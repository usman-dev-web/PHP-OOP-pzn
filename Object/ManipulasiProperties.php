<?php

// PROPERTIES
/**
 * Fields/Properties/Attributes adalah data yang bisa kita sisipkan di dalam object
 * sebelum kita bisa memasukan data di fields, kita harus mendeklarasikan data apa saja yang dimiliki object tersebut di dalam deklarasi class-nya
 * membuat field sama seperti membuat variable, namun ditempatkan di block classdan diawali dengan kata kunci var
 */

 // MANIPULASI PROPERTIES
 /**
  * fields yang ada di object bisa kita manipulasi
  * untuk memanipulasi data properties, sama seperti cara pada variable
  * untuk mengakses properties, kita butuh kata kunci -> setelah nama object dan diikuti nama propertiesnya
  */

 require_once __DIR__ . "/../Class/Person.php";
$person = new Person();
$person->name = "Usman"; // mengakses properties name
$person->address = "Pandeglang"; // mengakses properties address
$person->country = "Indonesia"; // mengakses properties country

// menampilkan data diatas
echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;