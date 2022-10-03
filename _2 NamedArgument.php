<?php

/*
    Named Argument bisa manggil function tanpa harus urut posisinya
*/

// Bisa memberikan default null di mana saja di parameter nya gk harus dibelakang

function sayHello(string $first, string $middle = "", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

echo "df" . PHP_EOL;

/* Tanpa named argument */
sayHello("Aris", "Marck", "Afriyanto");
// sayHello("Aris", "Afriyanto"); // error Afriyan dianggap middle, last gk dimasukkan


/* Named Argument */
sayHello(first: "Aris",  last: "Yanto", middle: "Afri");
sayHello(first: "Mike", last: "Tyson");
