<?php

/*
    PHP 7, terdapat type data mixed, tipe data ini bisa digunakan ketika sebuah argument atau return function mengembalikkan data yg berbeda beda, tidak bisa tipe data lebih dari satu, bisanya hanya bebas apa saja tapi pilih satu.
    Kareba tdk bisa menyebutkan tipe data berbeda-beda lebih dari 1 di php 7 maka biasanya ditambahkan tipe data yang bernama mixed

    PHP 8, tipe data mixed diperbarui, karena sudah ada union types, jadi tipe data mixed adalah singkatan dari tipe data
    array|bool|callable|float|null|object|resource|string

    sehingga jika kita mau memberi banyak tipe data langsung di php kita bisa gunakan
    mixed atau jika kita hanya butuh beberapa kita bisa array|string gthuuu

    tetapi di php 8 disarankan menggunakan array|string dll saja karena jika kita gunakan semua tipe data di parameter function tidak spesifik sehingga bisa bebas isi apapun tipe data nya 
    atau return value misal kita hanya mengembalikkan beberapa tipe data itu akan membuat return valuenya bebas gthu tidak spesifik

*/

/*
    Tidak Disarankan

    mixed = semua tipe data
*/

function mixedType(mixed $data): mixed
{
    if (is_null($data)) {
        return null;
    } else if (is_array($data)) {
        return [];
    } else if (is_string($data)) {
        return "string";
    }
}

echo mixedType(null) . PHP_EOL;




/*
    Disarankan
*/

function UnionTypes(null|array|string $data): null|array|string
{
    if (is_null($data)) {
        return null;
    } else if (is_array($data)) {
        return [];
    } else if (is_string($data)) {
        return "string";
    }
}

echo UnionTypes("aris") . PHP_EOL;
