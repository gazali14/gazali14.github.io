<?php
  $host="localhost";
  $user="root";
  $password="";
  $database="puskesmas";
  $connect=mysqli_connect($host,$user,$password);
  mysqli_select_db($connect,$database);
  
?>