<?php
   $output["error"] = true;
   if(isset($_GET["kode"])){ 
       $cx = $_GET["kode"]; 
       include_once("dbkoneksi3.php");
       $sql = "SELECT KODE, NAMA_MATKUL, JURUSAN, SEMESTER, JUMLAH_SKS, JENIS_MATKUL, DOSEN_PENGAMPUH FROM matkul WHERE KODE='$cx'";
       $hsl = mysqli_query($cnn, $sql);
       $output["isi"] = mysqli_fetch_all($hsl);
       $output["error"] = false;
       $output["sql"] = $sql;
   }

   echo json_encode($output);