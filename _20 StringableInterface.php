<?php

/*
    Stringable Interface

    PHP 8, sekarang ada interface baru bernama Stringable
    jika kita melakukan overriding magic function __toString(), maka secara otomatis class ini akan implement ke interface Stringable

    Interface Stringable hanya berisi magic method __toString

    Kita tdk perlu melakukan secara manual ini otomatis dilakukan PHP 8
*/

// param nya kita atur tipe data nya dari interface Stringable
function sayHello(Stringable $stringable): void
{
    echo "Hi, {$stringable->__toString()} \n"; // jika mau gunakan __toString di function lebih mudah
}


class Person // bisa implement ke Stringable tapi tidak wajib
{
    public function __toString(): string
    {
        return "Person";
    }

    // jika __toString dihilangkan maka akan error karena class ini dianggap bukan stringable
}

// class person bisa disebut sebagai stringable karena didalamnya ada class __toString
sayHello(new Person);
