<?php

require 'koneksi.php';

$siswa = mysqli_query($conn, "SELECT * FROM transaksi");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="style-2.css">
</head>
<body>

    <!-- Membuat Div Teks -->
    <div class="teks">
    <h1>Data Transaksi Jual Beli Sepatu</h1>
    </div>
    <!-- Penutup Div Teks -->

    <!-- Membuat Div gam-2 -->
<div class="gam-2">
    <a href="Produk.php">Dashboard</a><br><br><br>
    <a href="transaksi.php">Transaksi</a><br><br><br>
    <a href="user.php">User</a><br><br><br>
    <a href="produk.php">Data Produk</a><br><br><br>
    <a href="tambah_data.php">Tambah Data</a><br><br><br>
    </div>
    <!-- Penutup Div gam-2 -->

    <!-- Membuat Div Isi-2 Dan Table1 -->
<div class="isi-2">
    <table class= "table1" >
        <tr>
            <th>No</th>
            <th>Nama Pembeli</th>
            <th>Nama Produk</th>
            <th>Alamat</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Status</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($data = mysqli_fetch_array($siswa)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $data["nama_pembeli"]; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td><?= $data["alamat"]; ?></td>
                <td><?= $data["harga"]; ?></td>
                <td><img src="<?= $data["foto"]; ?>" width="80px"></td>
                <td><?= $data["status"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
  
    </table>
        </div>
            <!-- Penutup Div Isi-2 Dan Table1 -->
</body>
</html>