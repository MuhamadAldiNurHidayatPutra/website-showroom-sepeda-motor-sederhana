<?php
session_start();

if ($_SESSION['status'] != "login") {
  header('Location: index.html');
}

$username = $_SESSION['username'];
include "koneksi.php";

?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

  <style>
    * {
      box-sizing: border-box;
      font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
      font-size: 16px;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      text-align: left;
      background-color: #fff;
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

    .logo {
      padding-left: 10px;
    }

    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #660000;
      color: white;
    }

    .container {
      display: flex;
      padding-top: 12px;
    }

    .sidebar {
      background-color: #660000;
      padding: 0;
      padding-top: 10px;
      width: 0;
      overflow-x: hidden;
      transition: 0.5s;
      height: 100vh;
    }

    .sidebar a {
      padding: 2px 2px 2px 22px;
      text-decoration: none;
      font-size: 18px;
      color: white;
      display: block;
    }

    .sidebar a:hover {
      color: #f1f1f1;
    }

    .content {
      flex: 4;
      padding: 20px;
    }

    .container.open-sidebar .sidebar {
      width: 200px;
    }

    .sidebar a {
      text-align: center;
      width: 100%;
      padding: 10px;
      display: table;
    }

    .sidebar h2 {
      text-align: center;
    }

    .tambah {
      display: inline-block;
      text-decoration: none;
      background-color: #660000;
      font-weight: bold;
      font-size: 14px;
      color: #FFFFFF;
      padding: 10px 15px;
      margin: 10px 0;
    }

    .tamcar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    }

    create-tambah:hover {
      background-color: #660000;
    }

    button {
      background-color: #333;
      margin-right: 20px;
    }
  </style>
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>

<body>

  <h1>List Data</h1>
  <!-- header -->
  <header>
    <div class="logo">
      <img src="logo.png" usemap="#image-map" width="200px">

      <map name="image-map">
        <area target="" alt="logo" title="logo" href="index.php" coords="27,52,91,9,138,22,168,31,434,29,423,61,24,60" shape="poly">
      </map>
    </div>
    <button class="toggle-btn" onclick="toggleSidebar()"><i class="fas fa-bars"></i></button>
  </header>
  <!-- header end -->

  <!-- sidebar -->
  <div class="container">
    <div class="sidebar">
      <h2>MENU</h2>
      <a href="index.php">stok barang</a> <br>
      <a href="pelanggan.php">data pelanggan</a> <br>
      <a href="pemesanan.php">transaksi</a> <br>
      <a href="logout.php">logout</a> <br>
    </div>
    <!-- sidebar end -->

    <!-- content -->
    <div class="content">
      <table id="customers">
        <tr>
          <th>No</th>
          <th>tanggal</th>
          <th>nama</th>
          <th>alamat</th>
          <th>merk</th>
          <th>jenis motor</th>
          <th>harga</th>
          <th>jenis pembayaran</th>
          <th>no telepon</th>
          <th>Aksi</th>
        </tr>
    </div>
  </div>
  <!-- content end -->
  
  <div class="tamcar">
    <div class="cari">
      <form action="" method="get">
          <label for="cari">cari : </label>
          <input type="text" name="cari" id="cari">
          <input type="submit" value="cari" class="tombol">
        </form>
    </div>
    <a href="input.php" class="tambah">tambah data</a>
  </div>

  <?php
  if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
  }
  ?>
  <br>

  <?php
  if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $sql = "select * from pemesanan where nama like '%$cari%' order by id desc";
  } else {
    $sql = "SELECT * FROM pemesanan ORDER BY id";
  }

  $query = mysqli_query($koneksi, $sql);
  $id = 1;
  while ($pemesanan = mysqli_fetch_array($query)) {
  ?>
    <tr>
      <td><?php echo $id++ ?></td>
      <td><?php echo $pemesanan['tanggal'] ?></td>
      <td><?php echo $pemesanan['nama'] ?></td>
      <td><?php echo $pemesanan['alamat'] ?></td>
      <td><?php echo $pemesanan['merk'] ?></td>
      <td><?php echo $pemesanan['tipe'] ?></td>
      <td><?php echo $pemesanan['harga'] ?></td>
      <td><?php echo $pemesanan['pembayaran'] ?></td>
      <td><?php echo $pemesanan['telp'] ?></td>
      <td>
        <a href="editpemesanan.php?id=<?php echo $pemesanan['id']; ?>"><i class="fas fa-edit"></i></a> &nbsp;
        <a href="hapuspesanan.php?id=<?php echo $pemesanan['id']; ?>" onclick="return confirm('apakah anda yakin ingin menghapusnya?');"><i class="fas fa-trash"></i></a>
      </td>
    </tr>
  <?php } ?>
  </table>
  <script>
    function tampilkanNotifikasi() {
      return konfirmasi;
    }

    function toggleSidebar() {
      document.querySelector('.container').classList.toggle('open-sidebar');
    }
  </script>
</body>

</html>