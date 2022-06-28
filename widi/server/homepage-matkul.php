<?php
   include_once("dbkoneksi3.php");
   $sql = "SELECT KODE, NAMA_MATKUL, JURUSAN, SEMESTER, JUMLAH_SKS, JENIS_MATKUL, DOSEN_PENGAMPUH FROM matkul";
   $hsl = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hsl);
   echo json_encode($output);