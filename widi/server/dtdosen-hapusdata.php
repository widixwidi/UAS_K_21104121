<?php
   $output["error"] = true;
   if(isset($_POST["txNIDN"])){ 
       $cx = $_POST["txNIDN"]; 
       include_once("dbkoneksi.php");
       $sql = "DELETE FROM dsn WHERE NIDN='$cx'";
       $hsl = mysqli_query($cnn, $sql);
       $output["error"] = false;
   }

   echo json_encode($output);