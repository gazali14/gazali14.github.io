<?php
    include "config.php";

    $id=$_GET['id_pasien'];
    $sql="DELETE FROM pasien WHERE id_pasien='$id' ";
	mysqli_query($connect,$sql);

    header("location: page_pasien.php");
?>