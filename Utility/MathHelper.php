<?php

class MathHelper
{
    // ketika sebuah properti dijadikan static, maka cara mengaksesnya tidak bisa menggunakan instansiasi object,
    // melainkan harus menyebutkan nama classnya lalu :: dan propertinya
    // dan properti yang sudah di jadikan static akan terlepas dari instansiasi objectnya
    static public string $name = "Math Helper";

    // function juga bisa dijadikan static
    // dan cara mengaksesnya sama seperti cara mengakses properti yang di set menjadi static
    // function static juga akan terlepas dari instansiasi objectnya
    static public function sum(int ...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}
