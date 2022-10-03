<?php

/*
    Match Expression hanya untuk kondisi yang sederhana
    struktur kontrol baru
    Match Expression mirip dgn switch case namun lebih baik
    Match adalah Expression, artinya dia bisa mengembalikan value (return value)
*/

/*
    Switch Case
*/

$value = "B";
$result = "";

switch ($value) {
    case "A":
    case "B":
    case "C":
        $result = "Anda Lulus!";
        break;
    case "D":
        $result = "Anda Tidak Lulus!";
        break;
    case "E":
        $result = "Anda Salah Jurusan!";
        break;
    default:
        $result = "Nilai Apa Yang Anda Masukkan!";
}

echo $result . PHP_EOL;


/*
    Match Expression equals
*/


$value = "D";

$result = match ($value) {
    "A", "B", "C" => "Anda Lulus!",
    "D" => "Anda Tidak Lulus!",
    "E" => "Anda Salah Jurusan",
    default => "Nilai Apa Yang Anda Masukkan"
};

echo $result . PHP_EOL;


/*
    Match Expression, bisa utk pengecekan kondisi lainnya
    Misal pengecekan menggunakan kondisi perbandingan, bahkan pengecekan kondisi berdasarkan boolean expression yg dihasilkan dari sebuah function
*/

/*  Match expression non equals, mirip kaya ternary operator tetapi ini bisa banyak kondisi bukan hanya 2 ( ya/tidak )*/

$nilai = 80;

$hasil = match (true) {
    /* Intinya nilai disini adalah boolean ntah itu panggil function atau apapun intinya boolean */
    $nilai >= 80 => "Anda Lulus Sangat Baik",
    $nilai >= 70 => "Anda Lulus",
    $nilai >= 60 => "Anda Lulus Nilai Cukup",
    default => "Anda Tidak Lulus"
};

echo $hasil . PHP_EOL;

/* Match Expression Memanggil Function */

$nama = "Mr. Aris";

$hello = match (true) {
    str_contains($nama, "Mr") => "Hello, Sir",
    str_contains($nama, "Mrs") => "Hello, Mom",
    default => "Hello"
};

echo $hello . PHP_EOL;
