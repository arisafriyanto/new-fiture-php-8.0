<?php

/*
    biasanya kita mengakses sesuatu dari sebuah object yang bisa memungkinkan nilainya null, maka kita akan melakukan pengecekan object tsb nilainya null atau tdk, jika tidak baru kita akses object tsb.

    Nullsafe operator kita tdk perlu melakukan itu, kita hanya perlu menggunakan karakter ? ( tanda tanya ) maka otomatis PHP akan melakukan pengecekan null tsb.
*/

/*
    Nullable Class Biasa
*/

class Address
{
    public ?string $country;
}

class User
{
    public ?Address $address;
}

function getCountry(?User $user): ?string
{
    // if ($user != null) {
    //     if ($user->address != null) {
    //         return $user->address->country;
    //     }
    // }

    return $user->address->country; // jika langsung tanpa cek akan error
}

// echo (getCountry(null));


/*
    Nullsafe Operator
*/

function getCountryy(?User $user): ?string
{
    return $user?->address?->country; // simple man
}

echo getCountryy(null);
