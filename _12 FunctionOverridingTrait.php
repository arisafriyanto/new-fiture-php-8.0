<?php

/*
    Validation Untuk Abstract Function di Trait

    PHP 8, sekarang terdapat validasi ketika mengimplementasikan abstract function di class dari trait
    PHP 7, saat kita mengubah seperti parameter dan return value nya, hal itu tdk menjadi masalah
    PHP 8, jika kita mengubah implementasinya dari abstract functionnya, maka otomatis akan error
*/

trait SampleTrait
{
    public abstract function getName(string $name): string;
}

class Sample
{
    use SampleTrait;

    /*
        di PHP 8, 
        Kita mengubah tipe data di parameternya dari abstract function trait sekarang ada validasi error
        Lebih aman, Harus sama

        di PHP 7 hanya akan muncul warning
    */

    public function getName(int $name): string
    {
        return $name;
    }

    public function getAddress(string $address): string
    {
        return $address;
    }
}


/*
    Validation function overriding

    sama seperti trait jika kita punya parent yang punya function, parameter dan return valuenya kita ubah tipe datanya maka akan error di php 7 hanya akan keluar warning
*/


class ChildSample extends Sample
{
    public function getAddress(array $address): string
    {
        return $address;
    }
}
