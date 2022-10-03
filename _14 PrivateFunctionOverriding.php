<?php

/*
    Private function iverriding

    PHP 7, saat kita membuat function, tapi ternyata di parentnya terdapat function dengan nama yang sama dengan function di childnya, walaupun visibilitynya private hal itu dianggap overriding.
    Padahal sudah jelas bahwa private function tidak boleh diakses oleh turunannya.

    PHP 8, Sekarang private function tidak ada hubungannya lagi dengan child class, sehingga kita bebas membuat function dengan nama yang sama walaupun di parent ada private function dengan nama yang sama
*/

class ParentClass
{
    /*
        Jika visibility function private di parent class, tidak ada hubungan sama sekali dengan child class
    */
    private function getName()
    {
        return "Parent";
    }
}

class ChildClass extends ParentClass
{
    /*
        Function ini bukan lagi turunan dari parent class nya, function ini berasa dari childclass karena parent dgn function yang sama tapi dia private maka tidak ada urusan lagi sama childnya kalo php 7 dia bermasalah makanya agak aneh sih
    */
    public function getName(string $name)
    {
        echo "hi, $name \n";
    }
}

$child = new ChildClass;
$child->getName("Aris");
