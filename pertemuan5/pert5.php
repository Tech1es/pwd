<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 5 - Link</title>
    <link rel="stylesheet" href="pert5.css">
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambahmahasiswa.php">Tambah Mahasiswa</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama Mahasiswa</th>
            <th>Program Studi</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Keterangan</th>
        </tr>
        <tr class="tr1">
            <td>1</td>
            <td>2109010001</td>
            <td>Nadila Putri</td>
            <td>Sistem Informasi</td>
            <td>Perempuan</td>
            <td>1 Januari 2003</td>
            <td><a href="editmahasiswa.php"> Edit</td>
        </tr>
        <tr class="tr2">
            <td>1</td>
            <td>2109010002</td>
            <td>Ronggo Hernanda</td>
            <td>Sistem Informasi</td>
            <td>Laki - Laki</td>
            <td>29 Februari 2004</td>
            <td><a href="editmahasiswa.php">Edit</td>
        </tr>
    </table>
</body>
</html>