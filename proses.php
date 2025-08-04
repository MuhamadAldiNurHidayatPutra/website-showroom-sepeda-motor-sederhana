<?php

include("koneksi.php");

//cek apakah tombol simpan sudah di klik atau belum
if (isset($_POST['kirim'])) {

    //ambil data
    $merk = $_POST['merk'];
    $tipe = $_POST['tipe'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO `input`(`id`, `merk`, `tipe`, `harga`, `jumlah`) 
    VALUES ('[value-1]','$merk','$tipe','$harga','$jumlah')";

    //eksekusi perintah sql
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        //jika insert data berhasil redirect ke view dengan message berhasil
        header('Location: index.php');
    } else {
        //jika gagal redirect ke view dengan message gagal
        header('Location: index.php');
    }
}
