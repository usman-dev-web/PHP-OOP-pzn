<?php

// DESTRUCTOR
/**
 * jika constructor adalah function yang akan dipanggil ketika object dibuat
 * destructor adalah function yang akan dipanggil ketika object dihapus dari memory
 * biasanya ketika object sudah tidak lagi digunakan, atau ketika aplikasi akan mati
 * untuk membuat function destructor, kita bisa menggunakan nama function __destruct()
 * pada function destruct tidak boleh menambahkan argument/parameter
 * dalam penggunaan sehari hari, ini cocok untuk menutup koneksi ke database atau menutup proses menulis ke file, sehingga tidak terjadi memory leak
 */

 class Destruct{
    // menambahkan properties
    var ?string $name = null;

    // membuat function construct
    function __construct(string $name)
    {
        $this->name = $name;
    }
    // membuat function destruct
    function __destruct()
    {
        echo "Object Destruct $this->name is destroyed" . PHP_EOL;
    }
 }