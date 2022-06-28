<?php
   $output["error"] = true;
   if(isset($_POST["txKODE"])){ 
       $cx = $_POST["txKODE"]; 
       include_once("dbkoneksi3.php");
       $sql = "DELETE FROM matkul WHERE KODE='$cx'";
       $hsl = mysqli_query($cnn, $sql);
       $output["error"] = false;
   }

   echo json_encode($output);