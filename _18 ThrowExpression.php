<?php

/*
    Throw Expression

    Throw adalah sebuah statment di PHP 7
    Hal ini menyebabkan kadang kita kesulitan menggunakan throw dibeberapa tempat yg membutuhkan expression atau value, seperti di ternary operator.

    PHP 8, sekarang throw adalah sebuah expression, artinya dia memiliki nilai, dan sekarang kita bisa funakan ditempat tempat yg membutuhkan expression kaya di ternary operator, match expression dll
*/


$nama = "Aris";
$hasil = $nama == "Aris" ? "Sukses" : throw new Exception("Ups bukan aris!");
/*                         Expresion    Expression
    jadi bisa langsung mengembalikkan valuenya karena expression bukan statement
    kalo di php 7 ini gk akan bisa

*/
echo $hasil . PHP_EOL;


/* Cara di php 7 throw statement*/

function sayHelloStatement(?string $name): void
{
    if ($name == null) {
        throw new Exception("Tidak boleh null!");
    }

    echo "Name : $name \n";
}

// sayHelloStatement("Aris Afriyanto");
// sayHelloStatement(null);



/* Cara di php 8 throw expression */

function sayHelloExpression(?string $name): void
{
    /* Sekarang throw mempunyai value bukan lagi statement */
    $result = $name != null ? "Name : $name" : throw new Exception("Tidak Boleh Null!");
    echo $result . PHP_EOL;
}

sayHelloExpression("Aris Afriyanto");
// sayHelloExpression(null);
