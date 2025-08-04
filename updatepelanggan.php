<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tgllahir = $_POST['tgllahir'];
$ktp = $_POST['ktp'];
$kk = $_POST['kk'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$telp = $_POST['telp'];

$sql = "UPDATE `pembeli` SET `nama`='$nama', `jk`='$jk', `tgllahir`='$tgllahir', `ktp`='$ktp', `kk`='$kk', `alamat`='$alamat', `pekerjaan`='$pekerjaan',
`telp`='$telp' WHERE id='$id'";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    // If the update is successful, redirect to index with a success message
    header('Location: pelanggan.php?status=berhasil');
} else {
    // If the update fails, redirect to index with an error message
    header('Location: pelanggan.php?status=gagal');
}
