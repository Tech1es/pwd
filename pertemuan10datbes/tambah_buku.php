<?php require "controllers/functions.php"; ?>

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
    <h1>Selamat Datang di Halaman Tambah Buku</h1>
    <hr>
    <ul>
        <a href="buku.php">
            <li>Halaman Buku</li>
        </a>
        <a href="pinjam.php">
            <li>Pinjam Buku</li>
        </a>
    </ul>
    <hr>
    <form action="" method="post">
        <table>
            <tr>
                <th>Judul Buku</th>
                <td>:</td>
                <td>
                    <input type="text" name="judul_buku">
                </td>
            </tr>
            <tr>
                <th>Tahun Terbit</th>
                <td>:</td>
                <td>
                    <select name="tahun_terbit">
                        <?php
                        $tahun = date("Y");
                        for ($i=2000; $i <= $tahun; $tahun--) { ?>
                        <option><?php echo $tahun; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Penulis</th>
                <td>:</td>
                <td>
                    <input type="text" name="penulis">
                </td>
                <tr>
                    <th>Penerbit</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="penerbit">
                    </td>
                </tr>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button name="simpan_buku" type="submit" style="width: 25%">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
    <td></td>
    <td></td>
    <?php 
    if (isset($_POST["simpan_buku"])) {
        $judul_buku = $_POST["judul_buku"];
        $tahun_terbit = $_POST["tahun_terbit"];
        $penulis = $_POST["penulis"];
        $penerbit = $_POST["penerbit"];
        if ($judul_buku == "") {
            echo "<i>Judul buku masih kosong!</i>";
        }elseif ($tahun_terbit == "") {
            echo "<i>Tahun terbit masih kosong!</i>";
        }elseif ($penulis == "") {
            echo "<i>Nama penulis masih kosong!</i>";
        }elseif ($penerbit == "") {
            echo "<i>Penerbit masih kosong!</i>";
        }else{

        }
    }
    ?>
</body>
</html>