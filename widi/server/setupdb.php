<?php
    define("DBHOST","127.0.0.1");
    define("DBUSER","root");
    define("DBPASCODE","");
    define("DBNAME","mahasiswa");
    define("DBPORT","3306");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE) or 
        die("Koneksi ke DBMS Mysql gagal<br>");
    $sql = "CREATE DATABASE ".DBNAME.";";
    if(mysqli_query($cnn,$sql)){
        echo "Database ".DBNAME." berhasil dibuat, ";
    }else{
        echo "Database ".DBNAME." Gagal dibuat, check kondisi server database";
        die();
    }
    mysqli_select_db($cnn, DBNAME);
    $sql = "CREATE TABLE mhs(
        NIM VARCHAR(8) PRIMARY KEY,
        NAMA VARCHAR(25),
        JURUSAN VARCHAR(15),
        JK VARCHAR(1),
        TGLLAHIR date
    )";
    if(mysqli_query($cnn,$sql)){
        echo "tabel mhs berhasil dibuat";
    }else{
        echo "tabel mhs tidak berhasil dibuat";
    }