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
            <a href="prak5.php">Indexed Arrays</a>
        </li>
        <li>
            <a href="prak5aa.php">Associative Arrays</a>
        </li>
        <li>
            <a href="prak5ma.php">Multidimensional Arrays</a>
        </li>
    </ul>
    <hr>
    <table border="1" style="border-collapse:collapse">
        <tr>
            <th>No</th>
            <th>Club</th>
            <th>Poin</th>
            <th>Status</th>
        </tr>
    </table>
    <?php
    $number = 1;
    $epl = array (
        array("Manchester City",88,"Juara"),
        array("Arsenal",81,"Runner-up"),
        array("Newcastle United",70,"UEFA Champions League"),
        array("Manchester United",69,"UEFA Champions League"),
        array("Liverpool",66,"UEFA Europa League"),
        array("Brighton & Hove Albion",61,"UEFA Europa League"),
        array("Aston Villa",58,"UEFA Europa Conference League"),
        array("Tottenham Hotspur",57,"Middle Table"),
        array("Brentford",56,"Middle Table"),
        array("Fulham",52,"Middle Table"),
        array("Crystal Palace",44,"Bottom Table"),
        array("Chelsea",43,"Bottom Table"),
        array("Wolves",41,"Bottom Table"),
        array("West Ham United",40,"Bottom Table"),
        array("Bournemouth",39,"Bottom Table"),
        array("Nottingham Forest",37,"Bottom Table"),
        array("Everton",33,"Bottom Table"),
        array("Leicester City",31,"Degradasi"),
        array("Leeds United",31,"Degradasi"),
        array("Southampton",24,"Degradasi"),
      ); ?>
    <table border="1" style="border-collapse: collapse">
    <?php
      echo $epl[0][0].": Points: ".$epl[0][1].", Status: ".$epl[0][2].".<br>";
      echo $epl[1][0].": Points: ".$epl[1][1].", Status: ".$epl[1][2].".<br>";
      echo $epl[2][0].": Points: ".$epl[2][1].", Status: ".$epl[2][2].".<br>";
      echo $epl[3][0].": Points: ".$epl[3][1].", Status: ".$epl[3][2].".<br>";
      echo $epl[4][0].": Points: ".$epl[4][1].", Status: ".$epl[4][2].".<br>";
      echo $epl[5][0].": Points: ".$epl[5][1].", Status: ".$epl[5][2].".<br>";
      echo $epl[6][0].": Points: ".$epl[6][1].", Status: ".$epl[6][2].".<br>";
      echo $epl[7][0].": Points: ".$epl[7][1].", Status: ".$epl[7][2].".<br>";
      echo $epl[8][0].": Points: ".$epl[8][1].", Status: ".$epl[8][2].".<br>";
      echo $epl[9][0].": Points: ".$epl[9][1].", Status: ".$epl[9][2].".<br>";
      echo $epl[10][0].": Points: ".$epl[10][1].", Status: ".$epl[10][2].".<br>";
      echo $epl[11][0].": Points: ".$epl[11][1].", Status: ".$epl[11][2].".<br>";
      echo $epl[12][0].": Points: ".$epl[12][1].", Status: ".$epl[12][2].".<br>";
      echo $epl[13][0].": Points: ".$epl[13][1].", Status: ".$epl[13][2].".<br>";
      echo $epl[14][0].": Points: ".$epl[14][1].", Status: ".$epl[14][2].".<br>";
      echo $epl[15][0].": Points: ".$epl[15][1].", Status: ".$epl[15][2].".<br>";
      echo $epl[16][0].": Points: ".$epl[16][1].", Status: ".$epl[16][2].".<br>";
      echo $epl[17][0].": Points: ".$epl[17][1].", Status: ".$epl[17][2].".<br>";
      echo $epl[18][0].": Points: ".$epl[18][1].", Status: ".$epl[18][2].".<br>";
      echo $epl[19][0].": Points: ".$epl[19][1].", Status: ".$epl[19][2].".<br>";
    ?>
    </table>
</body>
</html>