<?php

/*
    Allow:: class on object

    PHP 7, Utk mendapatkan class sebuah object, kita perlu menggunakan
    NamaClass::object   atau
    get_class($object)

    PHP 8, Sekarang kita bisa langsung mengambil nama class dari $object::class secara langsung
*/

class Login
{
}

$login = new Login;

var_dump(Login::class);
var_dump(get_class($login));

/* Yang baru di php 8 lebih sederhana */

var_dump($login::class);
