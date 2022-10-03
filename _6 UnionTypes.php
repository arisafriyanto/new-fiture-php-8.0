<?php

/*
    Php adalah bahasa pemrogramman yang dynamic
    Saat membuat variable, parameter, return value sebenernya di php tdk wajib sebutkan tipe datanya, maka secara otomatis PHP akan memastikan tipe data tsb.
    
    Saat kita tambahkan tipe data, maka secara otomatis PHP akan memastikan tipe data tsb harus sesuai dgn tipe data yg sudah kita definisikan
    PHP 8 ada fitur Union Types, dimana kita bisa menambahkan lebih dari satu tipe data ke property, argument, atau return value.

    Penggunaan Union Types bisa menggunakan tanda | diikuti dgn tipe data selanjutnya
*/

class UnionTypes
{
    /* Penggunaan di property */
    public string $name;
    public int|float $age;
    public string|array $hoby;

    public string|int|float|bool|array $data;

    public function sum(int|float $one, float|int $two): float|int
    {
        return $one + $two;
    }
}

$union = new UnionTypes;
echo $union->name = "aris" . PHP_EOL;
var_dump($union->hoby = ["makan", "tidur"]) . PHP_EOL;

echo $union->sum(10, 20) . PHP_EOL;
echo $union->data = 1 . PHP_EOL;
echo $union->data = "Aku" . PHP_EOL;
echo $union->data = 1.9 . PHP_EOL;
echo $union->data = false;
var_dump($union->data = ["aku", "makan", "nasi"]) . PHP_EOL;


function example(string|array $data): string|array
{
    if (is_string($data)) {
        return $data . PHP_EOL;
    } else if (is_array($data)) {
        return $data;
    }
}


echo example("aku cinta dia");
var_dump(example(["aku", "cinta", "dia"]));
