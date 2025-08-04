<?php

include("koneksi.php");

//cek apakah tombol simpan sudah di klik atau belum
if (isset($_POST['kirim'])) {

    //ambil data
    $tanggal = $_POST['tanggal'];
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
    $telp = $_POST['telp'];

    $sql = "INSERT INTO `pemesanan`(`id`, `tanggal`, `nama`, `jk`, `ktp`, `kk`, `alamat`, `merk`, `tipe`, `jumlah`, `harga`, `pembayaran`, `telp`) 
    VALUES ('[value-1]','$tanggal','$nama','$jk','$ktp','$kk','$alamat','$merk','$tipe','$jumlah','$harga','$pembayaran','$telp')";

    //eksekusi perintah sql
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        //jika insert data berhasil redirect ke view dengan message berhasil
        header('Location: pemesanan.php');
    } else {
        //jika gagal redirect ke view dengan message gagal
        header('Location: pemesanan.php');
    }
}
