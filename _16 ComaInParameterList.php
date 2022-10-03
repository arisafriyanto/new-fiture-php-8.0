<?php

/*
    Coma di Parameter list

    ini adalah salah satu fitur yang sederhana, tapi bermanfaat
    PHP 8, sekarang kita bsa menambahkan karakter koma di akhir parameter list, seperti ketika memanggil function, membuat array dll.

    coma diujung parameter, memudahkan ajah
*/


function sayHello(string $first, string $last): void
{
    echo "Hi, $first $last" . PHP_EOL;
}

// Ketika duplikasi kodenya lebih mudah mirip kaya array

sayHello(
    "Aris",
    "Afriyanto",
);


function sum(int ...$value)
{
}

// lebih gampang jika banyak parameter
sum(
    19,
    20,
    30,
    50,
);
