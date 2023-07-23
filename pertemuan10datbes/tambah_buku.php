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
                <th>Book Title</th>
                <td>:</td>
                <td>
                    <input type="text" name="judul_buku" placeholder="Input Book Title" value="<?= @$_POST["judul_buku"]; ?>">
                </td>
            </tr>
            <tr>
                <th>Release Year</th>
                <td>:</td>
                <td>
                    <select name="tahun_terbit">
                        <?php
                        $tahun = date("Y");
                        for ($i = 2000; $i <= $tahun; $tahun--) { ?>
                            <option><?php echo $tahun; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Author</th>
                <td>:</td>
                <td>
                    <input type="text" name="penulis" placeholder="Input Author's Name" value="<?= @$_POST["penulis"]; ?>">
                </td>
            </tr>
            <tr>
                <th>Publisher</th>
                <td>:</td>
                <td>
                    <input type="text" name="penerbit" placeholder="Input Publisher" value="<?= @$_POST["penerbit"]; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button name="simpan_buku" type="submit">Save</button>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST["simpan_buku"])) {
        $judul_buku = $_POST["judul_buku"];
        $tahun_terbit = $_POST["tahun_terbit"];
        $penulis = $_POST["penulis"];
        $penerbit = $_POST["penerbit"];

        $tanggal = date("Y-m-d H:i:s");

        if ($judul_buku == "") {
            echo "<i>Judul buku masih kosong!</i>";
        } elseif ($tahun_terbit == "") {
            echo "<i>Tahun terbit masih kosong!</i>";
        } elseif ($penulis == "") {
            echo "<i>Penulis masih kosong!</i>";
        } elseif ($penerbit == "") {
            echo "<i>Penerbit masih kosong!</i>";
        } else {
            $simpan = q("INSERT INTO buku VALUES(null,'$judul_buku','$tahun_terbit','$penulis','$penerbit','$tanggal','$tanggal')");
            if ($simpan) {
                echo "
                <script>
                alert('Buku berhasil ditambahkan');
                location='buku.php';
                </script>
                ";
            } else {
                echo "<i>Data Gagal ditambahkan!</i>";
            }
        }
    }
    ?>

</body>

</html>