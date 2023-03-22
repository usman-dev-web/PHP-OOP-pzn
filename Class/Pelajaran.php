<?php

// membuat class Pelajaran
class Pelajaran{
    // menambahkan properties dengan visibility protected agar bisa diakses oleh class turunannya
    protected string $kelas;
    protected string $mapel;

    // membuat constructor dengan visibility public
    public function __construct(string $kelas, string $mapel)
    {
        $this->kelas = $kelas;
        $this->mapel = $mapel;
    }

    // membuat function dengan visibility public untuk mendapatkan value dari $kelas dan $mapel
    public function getKelas() :string{
        return $this->kelas;
    }

    public function getMapel() :string{
        return $this->mapel;
    }

    public function getInfo(){
        echo "$this->kelas & $this->mapel" . PHP_EOL;
    }
}

// membuat class turunan dari dari class Pelajaran
class Less extends Pelajaran{
    // membuat function dengan visibility public
    public function info(){
        echo "Kelas $this->kelas dan pelajaran $this->mapel" . PHP_EOL;
    }
}