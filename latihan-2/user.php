<?php

require 'koneksi.php';

$user = mysqli_query($conn, "SELECT * FROM user");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="style-3.css">
</head>
<body>

    <!-- Membuat Div Teks -->
    <div class="teks">
    <h1>Data User</h1>
    </div>
    <!-- Penutup Div Teks -->

    <!-- Membuat Div gam -->
    <div class="gam">
    <a href="Produk.php">Dashboard</a><br><br><br>
    <a href="transaksi.php">Transaksi</a><br><br><br>
    <a href="user.php">User</a><br><br><br>
    <a href="produk.php">Data Produk</a><br><br><br>
    <a href="tambah_data.php">Tambah Data</a><br><br><br>
    </div>
    <!-- Penutup Div gam -->

    <!-- Membuat Div Isi-3 Dan Tables -->
    <div class="isi-3">
    <table class= "tables" >
        <tr>
            <th>Id</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Password</th>
            <th>Roles</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($data = mysqli_fetch_array($user)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["username"]; ?></td>
                <td><?= $data["Password"]; ?></td>
                <td><?= $data["Roles"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
  
    </table>
        </div>
            <!-- Penutup Div Isi-3 Dan Tables -->
</body>
</html>