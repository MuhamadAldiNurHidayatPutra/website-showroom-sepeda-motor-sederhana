<?php

include("koneksi.php");

//cek apakah tombol simpan sudah di klik atau belum
if (isset($_POST['kirim'])) {

    //ambil data
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tgllahir = $_POST['tgllahir'];
    $ktp = $_POST['ktp'];
    $kk = $_POST['kk'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];
    $telp = $_POST['telp'];

    $sql = "INSERT INTO `pembeli`(`id`, `nama`, `jk`, `tgllahir`, `ktp`, `kk`, `alamat`, `pekerjaan`, `telp`) 
    VALUES ('[value-1]','$nama','$jk','$tgllahir','$ktp','$kk','$alamat','$pekerjaan','$telp')";

    //eksekusi perintah sql
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        //jika insert data berhasil redirect ke view dengan message berhasil
        header('Location: pelanggan.php');
    } else {
        //jika gagal redirect ke view dengan message gagal
        header('Location: pelanggan.php');
    }
}
