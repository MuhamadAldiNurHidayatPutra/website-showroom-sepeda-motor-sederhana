<?php
session_start();

if ($_SESSION['status'] != "login") {
    header('Location: halutama.html');
}

$username = $_SESSION['username'];
include "koneksi.php";

?>

<!doctype html>
<html>

<head>
    <title>MOTORCYCLESTOREHOUSE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
            margin-top: 140px;
        }

        header {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 10%;
            z-index: 1;
        }

        .floating-form-container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            width: 100%;
            position: relative;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 16px;
        }

        input[type="submit"] {
            background-color: #660000;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #660000;
        }

        .logo {
            padding-left: 10px;
        }
    </style>
</head>

<body>
    <!-- header -->
    <header>
        <div class="logo">
            <img src="logo.png" usemap="#image-map" width="200px">

            <map name="image-map">
                <area target="" alt="logo" title="logo" href="index.php" coords="27,52,91,9,138,22,168,31,434,29,423,61,24,60" shape="poly">
            </map>
        </div>
    </header>
    <!-- header end -->
    <div class="floating-form-container">
        <h2>BARANG MASUK</h2>
        <form method="POST" action="proses.php" enctype="multipart/form-data">
            <label for="merk">merk sepeda motor</label>
            <input type="text" name="merk" required><br>

            <label for="tipe">tipe sepeda motor</label>
            <select name="tipe">
                <option value="" disabled selected>--pilih tipe sepeda motor--</option>
                <option value="sport">Sport</option>
                <option value="cruiser">Cruiser</option>
                <option value="touring">Touring</option>
                <option value="naked">Naked</option>
            </select>

            <label for="harga">harga</label>
            <input type="number" name="harga" required><br>

            <label for="jumlah">jumlah</label>
            <input type="number" name="jumlah" required><br>

            <input type="submit" value="Pesan" name="kirim" onclick="showFloatingAlert()">

            <input type="hidden" name="tersembunyi" value="Kode sesi: ABC DEF XYZ 123 789" />
        </form>
    </div>
</body>

</html>