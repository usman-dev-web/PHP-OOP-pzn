<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    // function untuk men-set data $sample
    function setSample(string $sample)
    {
        $this->sample = $sample;
    }

    // function untuk menghapus properties yang tidak diinginkan ketika di clone
    public function __clone()
    {
        unset($this->sample); // sample akan dihapus setelah di duplikasi
    }

    // __toString() function
    /**
     * __toString() function merupakan salah satu magic function yang digunakan sebagai representasi string sebuah object
     * jika misal kita ingin membuat string dari object kita, kita bisa membuat function __toString()
     */

    // kode __toString() function
    public function __toString(): string
    {
        return "Student Id : $this->id, Name : $this->name, Value : $this->value";
    }

    // __invoke() function
    /**
     * __invoke() merupakan function yang di eksekusi ketika object yang kita buat dianggap sebagai function
     * misal ketika kita membuat object $student, lau kita melakukan $student(), maka secara otomatis function __invoke() yang akan di eksekusi
     */

    // kode __invoke() function
    public function __invoke(...$arguments)
    {
        $join = join(", ", $arguments);
        echo "Invoke Student with arguments $join" . PHP_EOL;
    }

    // __debugInfo() function
    /**
     * sebelumnya kita sering melakukan debug variable menggunakan function var_dump()
     * function var_dump() sebenarnya memanggil function __debugInfo()
     * jika kita ingin mengubah isi dari debug info, kita bisa membuat function __debugInfo()
     */

     // kode __debugInfo() Function
     public function __debugInfo() : array
     {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "Usman",
        ];
     }
}
