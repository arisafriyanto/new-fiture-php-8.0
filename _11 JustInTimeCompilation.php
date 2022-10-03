<?php

/*
    PHP 8 mengenalkan fitur baru Just In Time Compilation

    Fitur ini akan mempercepat ketika mengeksekusi program PHP yang kita buat
    Namun sebelum kita bahas JIT, kita perlu tahu dulu bagaimana PHP menjalankan kode program kita 
*/

/*
    Cara PHP menjalankan kode program



                  Tokens  Abstract Syntax Tree      OPcodes
                    ^           ^                      ^
    PHP Code --> Tokenize --> Parse -->             Compile --> Execute --> CPU


    kode php akan ditokenize dulu (dibaca dulu file php nya) hasil dari tokenize berupa tokens" nya, kemudia akan diparsing menjadi Abstract Syntax Tree selanjutnya akan di compile, PHP sebenernya melakukan compile, kita tahunya php tidak perlu dicompile karena kita tidak mengubah filenya seperti dari golang diubah jadi Binary, Tapi php sebenernya di compile dulu dan hasilnya adalah OPcodes, OPcodes ini yang nanti akan di eksekusi ( Exceute ) nah ketika sudah dieksekusi dia akan dijalankan di CPU

    Proses ini akan diulang ulang ketika kita menjalankan program php, itulah sebabnya PHP akan sedikit lambat prosenya karena akan melakukan banyak tahapan itu secara berulang-ulang, tidak seperti golang yang langsung jadi binary sehingga dia lebih cepat dia langsung ke 

    Golang Code -> OPcodes -> execute -> CPU

    Ada Fitur Baru di PHP 8 untuk mengatasi ini

    Opcache
    
    Secara default PHP akan membaca kode program php ketika kita menjalankan program PHP
    OPCache digunakan utk meningkatkan performance PHP, dgn cara menyimpan hasil kompilasi kode php di memory
    Dengan demikian, PHP tidak perlu membaca ulang kode program PHP setiap kali program dijalankan
    PHP akan langsung membaca dari OPCache yang ada dimemory
    Fitur OPCache harus diaktifkan terlebih dahulu sebelum kita menggunakannya

*/



/*
    Just In Time Compilation

    Opcache akan membuat kode program kita terhindar dari harus melakukan tokenize, parsing, dan compile lagi secara terus-menerus tiap request

    JIT, akan membuat hasil kompilasi kita tidak perlu lagi kode program kita diterjemahkan oleh virtual mechine php, melainkan langsung dijalankan oleh mechine

    Jadi walaupun udah jadi Opcodes tapi tetep jika kita mau jalankan harus ditranslate ke bahasa mechine dengan JIT hal itu tidak perlu dilakukan

    JIT di php menggunakan library di bahasa pemrogramman C Bernama DynASM, oleh karena itu JIT bisa mentranslate hasil compile opcodes ke instruksi mechine

    Tidak akan semua kode programm dioptimasi dengan JIT hanya yang butuh kalkulasi CPU kaya algoritma, mechine leraning dll, dan jika kita bikin website biasa tidak akan terlalu terasa karena yang input output ke Database (IO) JIT ini lebih terasa untuk mechine learning, Algoritma yang berat-berat

    Masa depan karena php mulai banyak kalkulasi yang menggunakan CPU
*/
