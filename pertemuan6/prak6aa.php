<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <!-- Associative array itu salah satu data yang ada di dalam array dijelaskan detail nya bagaimana -->
    <h1>Associative Arrays</h1>
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
    <hr>
    <?php 
    $status = array("Juara", "Runner-up", "UEFA Champions League", "UEFA Champions League", "UEFA Europa League", "UEFA Europa League", "UEFA Europa Conference League", "Middle Table", "Middle Table", "Middle Table", "Middle Table", "Middle Table", "Middle Table", "Middle Table", "Bottom Table", "Bottom Table", "Bottom Table", "Degradasi", "Degradasi", "Degradasi");
    $club = array("Manchester City" => "88","Arsenal" => "81", "Newcastle United" => "70", "Manchester United" => "69", "Liverpool" => "66", "Brighton" => "61","Aston VIlla" => "58", "Tottenham Hotspur" => "57", "Brentford" => "56", "Fulham" => "52","Crystal Palace" => "44","Chelsea" => "43", "Wolves" => "41", "West Ham United" => "40", "Bournemouth" => "39","Nottingham Forest" => "37","Everton" => "33", "Leicester City" => "31", "Leeds United" => "31", "Southampton" => "24", );
    $jumlah_status = count($status);
    // var_dump($club);
    // var_dump($status);
    // echo $status["Juara"];
    ?>
    <table border="1" style="border-collapse:collapse">
        <tr>
            <th>No</th>
            <th>Club</th>
            <th>Poin</th>
            <th>Status</th>
        </tr>
        <?php
        $number = 1; 
        $statusbaru = 0;
        foreach ($club as $u => $u_value) : ?>       
        <tr style="text-align: center; font-family: sans-serif;">
            <td><?= $number++; ?></td>
            <td><?= $u; ?></td>
            <td><?= $u_value; ?></td>
            <td><?= $status[$statusbaru++]; ?></td>
        </tr>
        <?php 
        endforeach;
        ?>
    </table>
</body>
</html>