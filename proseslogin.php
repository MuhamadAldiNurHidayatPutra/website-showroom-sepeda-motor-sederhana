<?php

//open session
session_start();

//include koneksi
include("koneksi.php");

//ambil data dari from login
$username = $_POST['username'];
$password = $_POST['password'];

//perintah sql untuk mencari data berdasar email dan password
$sql = "SELECT * FROM pegawai WHERE username = '$username' AND password = '$password'";
$query = mysqli_query($koneksi, $sql);

//hitung jumlh datanya
$data = mysqli_num_rows($query);

if($data > 0 ){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header('Location: index.php');
}else{
    header('Location: login.php?msg=gagal');
}