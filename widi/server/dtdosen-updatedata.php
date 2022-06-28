<?php
    $h["error"] = 1; 
    if(isset($_POST["txNIDN"])){
        include_once("dbkoneksi.php");
        $nidn = $_POST["txNIDN"];
        $namad = $_POST["txNAMAD"];
        $jkeld = $_POST["txJKELD"];
        $tgld = $_POST["txTGLD"];
        $jabatan =  $_POST["txJABATAN"];
        $mengampuh =  $_POST["txMENGAMPUH"];

        $sql = "UPDATE dsn SET 
            NAMA='$namad',
            JENIS_KELAMIN='$jkeld',
            TANGGAL_LAHIR='$tgld',
            JABATAN='$jabatan',
            MENGAMPUH_MATA_KULIAH='$mengampuh'
            WHERE NIDN='$nidn'";
            
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            $h["error"] = 0; 
        }
    }
    echo json_encode($h);