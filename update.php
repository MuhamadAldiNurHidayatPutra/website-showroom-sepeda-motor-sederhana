<?php
include "koneksi.php";

$id = $_POST['id'];
$merk = $_POST['merk'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$sql = "UPDATE `input` SET `merk`='$merk', `tipe`='$tipe', `harga`='$harga', `jumlah`='$jumlah' WHERE id='$id'";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    // If the update is successful, redirect to index with a success message
    header('Location: index.php?status=berhasil');
} else {
    // If the update fails, redirect to index with an error message
    header('Location: index.php?status=gagal');
}
