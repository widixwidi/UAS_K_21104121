<?php
    include_once("konfigurasi-matkul.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) 
        or die("Koneksi ke DBMS Mysql gagal<br>");