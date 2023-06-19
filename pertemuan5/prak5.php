<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Hyperlink</title>
</head>
<body>
    <h1>Indexed Arrays</h1>
    
    <ul>
        <li>
            <a href="prak5.php">Indexed Arrays</a>
        </li>
        <li>
            <a href="prak5aa.php">Associative Arrays</a>
        </li>
        <li>
            <a href="prak5ma.php">Multidimensional Arrays</a>
        </li>
    </ul>

    <?php 
        $produk = array("Samsung", "Acer", "MSI", "Lenovo", "TUF Gaming", "ROG", "Pavilion Gaming", "ThinkPad", "YOGA", "MacBook");
        $jumlah_produk = count($produk);
        // echo $jumlah_produk;
        // var_dump($produk);
    ?>
    <table border="1" style="border-collapse: collapse">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
        </tr>
        <!-- Menggunakan for pada array -->
        <?php 
        for ($i=0; $i < $jumlah_produk; $i++) { ?>
        <tr style="text-align: center">
            <td><?= $i+1; ?></td>
            <td><?= $produk[$i]; ?></td>
        </tr>
        <?php    }  ?>

        <!-- Menampilkan data array secara manual dengan index nya -->
        <!-- <tr>
            <td>1</td>
            <td><?= $produk[0]?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?= $produk[1]?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?= $produk[2]?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?= $produk[3]?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?= $produk[4]?></td>
        </tr>
        <tr>
            <td>6</td>
            <td><?= $produk[5]?></td>
        </tr> -->
    </table>
</body>
</html>