<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays</title>
</head>
<body>
<h1>Multidimensional Arrays</h1>
    <ul>
        <li>
            <a href="prak6.php">Indexed Arrays</a>
        </li>
        <li>
            <a href="prak6aa.php">Associative Arrays</a>
        </li>
        <li>
            <a href="prak6ma.php">Multidimensional Arrays</a>
        </li>
    </ul>

    <?php 
    $teknologi = [
            array("Laravel", "Framework", "Web"),
            array("React Native", "Framework", "Mobile"),
            array("Codeigniter", "Framework", "Web"),
            array("Flutter", "Framework", "Mobile"),
            array("Python", "Program Language", "Mobile and Web")
    ];
    // var_dump($teknologi);
    // echo $teknologi[0][4][2];
    $jumlah_teknologi = count($teknologi);
    ?>

    <table border="1" style="border-collapse:collapse; text-align:center";>
        <tr>
            <th>No</th>
            <th>Nama Pemrograman</th>
            <th>Jenis</th>
            <th>Platform</th>
        </tr>
        <?php 
        for ($i=0; $i < $jumlah_teknologi; $i++) {
            $jumlah_isi_teknologi = count($teknologi[$i]); 
            ?> 
        <tr>
            <td><?php echo $i+1; ?></td>
            <?php for($x=0; $x < $jumlah_isi_teknologi; $x++) {?>
            <td><?php echo $teknologi[$i][$x]; ?></td>
            <?php } ?>
        </tr>
        <?php }
        ?>
    </table>
</body>
</html>