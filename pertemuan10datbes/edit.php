<?php
require "controllers/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Saya</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h1 style="text-align: center;">Selamat Datang di Halaman Buku</h1>
    <hr>
    <ul>
        <a href="index.php">
            <li>Home</li>
        </a>
        <a href="pinjam.php">
            <li>Pinjam Buku</li>
        </a>
    </ul>
    <hr>
    <a href="tambah_buku.php">Tambah Buku</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Tahun Terbit</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Update</th>
            <th>Opsi</th>
        </tr>
        <?php
        foreach (buku() as $b) : ?>
            <tr>
                <td style="text-align: center;"><?= @$b["id"]; ?></td>
                <td style="text-align: center;"><?= @$b["judul_buku"]; ?></td>
                <td style="text-align: center;"><?= @$b["tahun_terbit"]; ?></td>
                <td style="text-align: center;"><?= @$b["penulis"]; ?></td>
                <td style="text-align: center;"><?= @$b["penerbit"]; ?></td>
                <td style="text-align: center;"><?= date("d F Y, H:i", strtotime(@$b["edit"])); ?></td>
            </tr>
        <?php endforeach;
        ?>
    </table>
</body>

</html>