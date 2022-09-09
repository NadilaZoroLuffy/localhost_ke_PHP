<?php

require 'koneksi.php';

$produk = mysqli_query($conn, "SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produk</title>
    <link rel="stylesheet" href="style-1.css">
</head>
<body>
    
    <!-- Membuat Div Teks -->
    <div class="teks">
    <h1>Data Produk Sepatu Prada</h1>
    </div>
    <!-- Penutup Div Teks -->

    <!-- Membuat Div gam -->
    <div class="gam">
    <a href="Produk.php">Dashboard</a><br><br><br>
    <a href="transaksi.php">Transaksi</a><br><br><br>
    <a href="user.php">User</a><br><br><br>
    <a href="log-out.php">Log-Out</a><br><br><br>
    <a href="tambah_data.php">Tambah Data</a><br><br><br>
    </div>
    <!-- Penutup Div gam -->

    <!-- Membuat Div Isi Dan Table -->
    <div class="isi">
    <table class= "table1" >
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Foto</th>
            <th>Stok</th>
            <th>Deskripsi</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($data = mysqli_fetch_array($produk)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td><img src="<?= $data["foto"]; ?>" width="80px"></td>
                <td><?= $data["stok"]; ?></td>
                <td><?= $data["desekripsi"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
  
    </table>
    </div>
    <!-- Penutup Div Isi Dan Table -->
</body>
</html>