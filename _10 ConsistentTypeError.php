<?php

/*
    Consistent Type Error

    Saat kita membuat function dan ketika kita mengirim argument dgn tipe data yang salah, maka akan berakibat terjadi TypeError

    Sayangnya di php banyak function bawaan yg tdk mengembalikkan TypeError, malah memberi warning

    Sekarang di PHP 8 banyak function yang mengembalikkan TypeError jika kita salah mengirimkan tipe data
*/

strlen([]);
