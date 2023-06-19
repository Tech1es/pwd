<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pembelian</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="pembelian.css">
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
    <form action="" method="post" style="text-align:center;">
        <div class="row">
            <label>Nama</label>
            <input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama']:''?>">
        </div>
        <div class="row">
            <label>Harga</label>
            <input type="text" name="harga" value="<?=isset($_POST['harga']) ? $_POST['harga'] : ''?>"/>
        </div>
        <div class="row">
            <label>Qty</label>
            <input type="text" name="qty" value="<?=isset($_POST['qty']) ? $_POST['qty'] : ''?>"/>
        </div>
        <div class="row">
            <label>Jumlah Bayar</label>
            <input type="text" name="bayar" value="<?=isset($_POST['bayar']) ? $_POST['bayar'] : ''?>"/>
        </div>
        <div class="row">
            <input type="submit" name="submit" value="Simpan"/>
        </div>
    </form>
    <?php 
    If (isset($_POST['submit'])) {
        echo '<h1 style="text-align:center;">Hasil Input</h1>';
        echo '<ul style="text-align:center;">';
        echo '<li style="text-align:center;">Nama: ' . $_POST['nama'] . '</li>';
	    echo '<li style="text-align:center;">Harga: ' . $_POST['harga'] . '</li>';
        echo '<li style="text-align:center;">Qty: ' . $_POST['qty'] . '</li>';
        echo '<li style="text-align:center;">Bayar: ' . $_POST['bayar'] . '</li>';
 }
?>
<button><a href="UTS.php">Kembali</a></button>
</body>
</html>