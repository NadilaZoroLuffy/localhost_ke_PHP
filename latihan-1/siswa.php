<?php

require 'koneksi.php';

$siswa = mysqli_query($conn, "SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Peserta Didik SMK Jakarta Pusat 1</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>NISN</th>
            <th>NIS</th>
            <th>Jurusan</th>
            <th>Foto</th>
            <th>Nomor WhatsApp</th>
            <th>Gmail</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($data = mysqli_fetch_array($siswa)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["nisn"]; ?></td>
                <td><?= $data["nis"]; ?></td>
                <td><?= $data["jurusan"]; ?></td>
                <td><img src="<?= $data["foto"]; ?>" width="80px"></td>
                <td><?= $data["nomor_whatsapp"]; ?></td>
                <td><?= $data["gmail"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
  
    </table>
</body>
</html>