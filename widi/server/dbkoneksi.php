<?php
    include_once("konfigurasi-dosen.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) 
        or die("Koneksi ke DBMS Mysql gagal<br>");