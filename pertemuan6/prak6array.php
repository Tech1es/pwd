<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak 6 Array</title>
</head>
<body>
<h1>Indexed</h1>
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
$mobil = array("Xenia", "Alphard", "Calya");
// var_dump($mobil);
// echo $mobil[2];
?>

<table border="1" style="border-collapse: collapse">
    <tr>
        <th>No</th>
        <th>Nama Mobil</th>
    </tr>
    <tr>
        <td>1</td>
        <td><?= $mobil[0] ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td><?= $mobil[1] ?></td>
    </tr>
    <tr>
        <td>3</td>
        <td><?= $mobil[2] ?></td>
    </tr>
</table>
</body>
</html>