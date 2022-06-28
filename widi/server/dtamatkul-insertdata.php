<?php
    $h["error"] = 1; 
    if(isset($_POST["txKODE"])){
        include_once("dbkoneksi3.php");
        $kode = $_POST["txKODE"];
        $namamatkul = $_POST["txNAMAMATKUL"];
        $jurusan =  $_POST["txJURUSAN"];
        $semester = $_POST["txSEMESTER"];
        $sks = $_POST["txSKS"];
        $jenis = $_POST["txJENIS"];
        $dosen = $_POST["txDOSEN"];

        $sql = "INSERT INTO matkul (KODE,NAMA_MATKUL,JURUSAN,SEMESTER,JUMLAH_SKS,JENIS_MATKUL,DOSEN_PENGAMPUH) VALUES('$kode','$namamatkul','$jurusan','$semester','$sks','$jenis','$dosen')";
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            $h["error"] = 0; 
        }
    }
    echo json_encode($h);