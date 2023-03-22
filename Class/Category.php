<?php

class Category
{
    // properties visibility private hanya bisa diakses di class ini saja
    private string $name;
    private bool $expensive;

    // function untuk mendapatkan data properties $name
    public function getName(): string
    {
        return $this->name;
    }

    // function untuk mengubah data properties $name
    public function setName(string $name): void
    {
        // validasi agar tidak bisa menerima string kosong 
        if(trim($name) != ""){ // jika $name ketika di trim tidak sama dengan string kosong, maka ambil, jika kosong tolak
            $this->name = $name;
        }
    }

    // function untuk mendapatkan data properties $expensive
    public function isExpensive(): string
    {
        return $this->expensive;
    }

    // function untuk mengubah data properties $expensive
    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}
