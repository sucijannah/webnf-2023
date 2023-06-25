<?php

    /* 
        variabel Sistem 
        variabel bulit in php (variabel yang sudah ada di php)
    */

    echo $_SERVER["DOCUMENT_ROOT"];

    echo '<br><br>' ;

    /*
        variabel User
        variabel yang di buat oleh user
    */
    $name = 'suci';
    $age = 15;
    $weight = 50.5;

    $name = 'suci';

    echo "Nama saya adalah $name" ;

    /*
        variabel konstan
        variabel yang tidak bisa diubah nilainya
        1. menggunakan define | define('fruit', "Apel");
        2. menggunakan const  | const fruit = "Apel";
    */
    echo '<br><br>';
    
    define("SITE_NAME", "Elena");
    echo SITE_NAME;
?>