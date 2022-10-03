<?php

/*
    Perbandingan number dan string
    misal saat kita bandingkan 0 == "aris", maka hasilnya true
    kenapa true? Karena Php akan melakukan type jugling dan mengubah aris menjadi int 0, sehingga hasilnya tru, ini membingungkan diphp

*/


/*
    String to number comparison di php 7
*/

// var_dump(0 == "0");         // true
// var_dump(0 == "0.0");       // true
// var_dump(0 == "aris");      // true
// var_dump(0 == "");          // true
// var_dump(42 == "    42");   // true
// var_dump(42 == "42aris");   // true


/*
    String to number comparison di php 8
*/

var_dump(0 == "0");         // true
var_dump(0 == "0.0");       // true
var_dump(0 == "aris");      // false
var_dump(0 == "");          // false
var_dump(42 == "    42");   // true
var_dump(42 == "42aris");   // false