<?php

require_once __DIR__ . "/../NameSpaces/Conflict.php";
require_once __DIR__ . "/../NameSpaces/Helper.php";

// memanggil class, function, constant dengan kata kunci use agar tidak lagi mengetikan nama namespaces berulang kali
use Data\One\Conflict; // memanggil class conflict didalam namespaces
use function Helper\helpMe; // memanggil function helpMe didalam namespaces
use const Helper\APPLICATION; // memanggil constant APPLICATION didalam namespaces

$conflict = new Conflict; // memanggil function didalam namespaces tanpa harus mengetikan nama namespacenya karena sudah kita use diatas
helpMe(); // sama juga
echo APPLICATION . PHP_EOL; // ini juga