<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$ktp = $_POST['ktp'];
$kk = $_POST['kk'];
$alamat = $_POST['alamat'];
$merk = $_POST['merk'];
$tipe = $_POST['tipe'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$pembayaran = $_POST['pembayaran'];

$sql = "UPDATE `pemesanan` SET `nama`='$nama', `jk`='$jk', `ktp`='$ktp', `kk`='$kk', `alamat`='$alamat', `merk`='$merk', `tipe`='$tipe', 
`jumlah`='$jumlah', `harga`='$harga', `pembayaran`='$pembayaran' WHERE id='$id'";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    // If the update is successful, redirect to index with a success message
    header('Location: pemesanan.php?status=berhasil');
} else {
    // If the update fails, redirect to index with an error message
    header('Location: pemesanan.php?status=gagal');
}
