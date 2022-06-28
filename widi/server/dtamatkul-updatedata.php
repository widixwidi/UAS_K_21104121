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

        $sql = "UPDATE matkul SET 
            NAMA_MATKUL='$namamatkul',
            JURUSAN='$jurusan',
            SEMESTER='$semester',
            JUMLAH_SKS='$sks',
            JENIS_MATKUL='$jenis',
            DOSEN_PENGAMPUH='$dosen'
            WHERE KODE='$kode'";
            
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            $h["error"] = 0; 
        }
    }
    echo json_encode($h);