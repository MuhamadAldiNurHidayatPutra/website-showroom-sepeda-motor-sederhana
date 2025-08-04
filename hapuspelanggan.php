<?php 

include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM `pembeli` WHERE id='$id'");
header("location:pelanggan.php");
 
?>