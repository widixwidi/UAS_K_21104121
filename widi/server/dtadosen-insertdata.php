<?php
    $h["error"] = 1; 
    if(isset($_POST["txNIDN"])){
        include_once("dbkoneksi.php");
        $nidn = $_POST["txNIDN"];
        $namad = $_POST["txNAMAD"];
        $jkeld = $_POST["txJKELD"];
        $tgld =  $_POST["txTGLD"];
        $jabatan =  $_POST["txJABATAN"];
        $mengampuh =  $_POST["txMENGAMPUH"];

        $sql = "INSERT INTO dsn (NIDN,NAMA,JENIS_KELAMIN,TANGGAL_LAHIR,JABATAN,MENGAMPUH_MATA_KULIAH) VALUES('$nidn','$namad','$jkeld','$tgld','$jabatan','$mengampuh')";
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            $h["error"] = 0; 
        }
    }
    echo json_encode($h);