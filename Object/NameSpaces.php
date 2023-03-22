<?php

// memanggil class yang berada didalam namespace

require_once __DIR__ . "/../NameSpaces/Conflict.php";
require_once __DIR__ . "/../NameSpaces/Helper.php";
// memanggil class yang berada didalam namespace harus diawali dengan nama namespacesnya
$conflict1 = new Data\One\Conflict();
$conflict2 = new Data\Two\Conflict();


// memanggil function dan constant yang berada didalam namespaces, diawali dengan nama namespacesnya
Helper\helpMe(); // memanggil function
echo Helper\APPLICATION; // memanggil constant
