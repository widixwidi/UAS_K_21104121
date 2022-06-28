<?php
    define("DBHOST","127.0.0.1");
    define("DBUSER","root");
    define("DBPASCODE","");
    define("DBNAME","dosen");
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
    $sql = "CREATE TABLE dsn(
        NIDN VARCHAR(10) PRIMARY KEY,
        NAMA VARCHAR(50),
        JENIS_KELAMIN VARCHAR(1),
        TANGGAL_LAHIR DATE,
        JABATAN VARCHAR(30),
        MENGAMPUH_MATA_KULIAH VARCHAR(30)
    )";
    if(mysqli_query($cnn,$sql)){
        echo "tabel dosen berhasil dibuat";
    }else{
        echo "tabel dosen tidak berhasil dibuat";
    }