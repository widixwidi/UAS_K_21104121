<?php
    define("DBHOST","127.0.0.1");
    define("DBUSER","root");
    define("DBPASCODE","");
    define("DBNAME","matakuliah");
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
    $sql = "CREATE TABLE matkul(
        KODE VARCHAR(5) PRIMARY KEY,
        NAMA_MATKUL VARCHAR(25),
        JURUSAN VARCHAR(15),
        SEMESTER INT(1),
        JUMLAH_SKS INT(1),
        JENIS_MATKUL VARCHAR(10),
        DOSEN_PENGAMPUH VARCHAR(50)
    )";
    if(mysqli_query($cnn,$sql)){
        echo "tabel matkul berhasil dibuat";
    }else{
        echo "tabel matkul tidak berhasil dibuat";
    }