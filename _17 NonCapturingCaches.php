<?php

function validateName(string $name): void
{
    if (trim($name) == "") {
        throw new Exception("Invalid");
    }
}

/*

    try {
        validateName("      ");
    } catch (Exception $exception) { // padahal kita tidak gunakan $exceptionnya
        echo "Invalid Name!" . PHP_EOL;
    }

*/

try {
    validateName("      ");
} catch (Exception) {
    // tidak wajib menambahkan variabel $exception lagi jika kita tdk mau menampilkan nya
    echo "Invalid Name!" . PHP_EOL;
}
