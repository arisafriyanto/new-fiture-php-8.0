<?php

class Sample
{
    public function getAddress(string $address): string
    {
        return $address;
    }
}


/*
    Validation function overriding

    sama seperti function overriding trait 
    jika kita punya parent yang punya function, parameter dan return valuenya kita ubah tipe datanya maka akan error di php 7 hanya akan keluar warning
*/


class ChildSample extends Sample
{
    public function getAddress(array $address): string
    {
        return $address;
    }
}
