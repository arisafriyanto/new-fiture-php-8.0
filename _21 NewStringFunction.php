<?php

/*
    New String Function
    PHP 8, terdapat beberapa function baru utk memanimpulasi string

    String function

    Function

    str_contains($string, $contains) : bool         
    Mengecek apakah $string mengandung $contains ( mencari kata tertentu )

    str_starts_with($string, $value) : bool         
    Mengecek apakah $string memiliki awal $value ( mencari awalan kata tertentu )

    str_ends_with($string, $value) : bool           
    Mengecek apakah $string memiliki akhir $value ( mencari akhiran kata tertentu )

*/


/* str_constains */

var_dump(str_contains("Aris Afriyanto", "Aris"));       // true
var_dump(str_contains("Aris Afriyanto", "Afriyanto"));  // true
var_dump(str_contains("Aris Afriyanto", "Joko"));       // false


/* str_starts_with */

var_dump(str_starts_with("Aris Afriyanto", "Aris"));        // true
var_dump(str_starts_with("Aris Afriyanto", "Afriyanto"));   // false
var_dump(str_starts_with("Aris Afriyanto", "Joko"));        // false


/* str_ends_with */

var_dump(str_ends_with("Aris Afriyanto", "Aris"));        // false
var_dump(str_ends_with("Aris Afriyanto", "Afriyanto"));   // true
var_dump(str_ends_with("Aris Afriyanto", "Joko"));        // false
