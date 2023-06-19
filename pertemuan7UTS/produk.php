<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Produk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="produk.css">
</head>
<body>
<div class="container">
  <h4 style="text-align: center;">Selamat Datang</h4>
  <h4 style ="text-align: center;" >Muhammad Iqbal Faiz Store</h4>
  <h2 style ="text-align: center;">Your Office Utility Needs</h2>
</div>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="UTS.php">Muhammad Iqbal Faiz Store</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="UTS.php">Home</a></li>
      <li><a href="produk.php">Menu Produk</a></li>
      <li><a href="pembelian.php">Menu Pembelian</a></li>
    </ul>
  </div>
</nav>
<?php 
    $kantor = [
            array("Buku Arsip", "Buku", "25.000"),
            array("Pena", "Alat Tulis", "4.000"),
            array("Pensil", "Alat Tulis", "2.500"),
            array("Meja Kerja", "Meja", "800.000"),
            array("Buku Akuntansi", "Buku", "15.000"),
            array("Correction Pen", "Alat Tulis", "5.000"),
            array("Penggaris", "Alat Tulis", "3.000"),
            array("Penghapus", "Alat Tulis", "3.000"),
            array("Lampu Meja", "Cahaya", "30.000"),
            array("Laptop Stand", "Aksesoris", "15.000"),
            array("Mousepad", "Aksesoris", "25.000"),
            array("Kipas Meja", "Aksesoris", "80.000"),
    ];
    // var_dump($teknologi);
    // echo $teknologi[0][4][2];
    $jumlah_kantor = count($kantor);
    ?>

    <table border="1" class="table">
        <tr>
            <th style="text-align:center;">No</th>
            <th style="text-align:center;">Nama Produk</th>
            <th style="text-align:center;">Jenis</th>
            <th style="text-align:center;">Harga</th>
        </tr>
        <?php 
        for ($i=0; $i < $jumlah_kantor; $i++) {
            $jumlah_isi_kantor = count($kantor[$i]); 
            ?> 
        <tr>
            <td><?php echo $i+1; ?></td>
            <?php for($x=0; $x < $jumlah_isi_kantor; $x++) {?>
            <td><?php echo $kantor[$i][$x]; ?></td>
            <?php } ?>
        </tr>
        <?php }
        ?>
    </table>

</body>
</html>