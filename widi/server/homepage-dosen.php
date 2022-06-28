<?php
   include_once("dbkoneksi.php");
   $sql = "SELECT NIDN, NAMA, JENIS_KELAMIN, TANGGAL_LAHIR, JABATAN, MENGAMPUH_MATA_KULIAH FROM dsn";
   $hsl = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hsl);
   echo json_encode($output);