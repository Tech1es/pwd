<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <a href="utsyangbener.php">
            <li>Dashboard</li>
        </a>
        <a href="pembelianyangbener.php">
            <li>Menu Pembelian</li>
        </a>
    </ul>
    <?php 
    $produk = [
            array("Acer Nitro 5", "ACR001", "Rp 14.000.000"),
            array("Sabun Mandi", "SBN001", "Rp 3.000"),
            array("Nike Zoom Apafly", "NZA001", "Rp 6.500.000"),
    ];
    // var_dump($teknologi);
    // echo $teknologi[0][4][2];
    $jumlah_produk = count($produk);
    ?>

    <table border="1" style="border-collapse:collapse; text-align:center";>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Kode Produk</th>
            <th>Harga Produk</th>
        </tr>
        <?php 
        for ($i=0; $i < $jumlah_produk; $i++) {
            $jumlah_isi_produk = count($produk[$i]); 
            ?> 
        <tr>
            <td><?php echo $i+1; ?></td>
            <?php for($x=0; $x < $jumlah_isi_produk; $x++) {?>
            <td><?php echo $produk[$i][$x]; ?></td>
            <?php } ?>
        </tr>
        <?php }
        ?>
    </table>
</body>
</html>