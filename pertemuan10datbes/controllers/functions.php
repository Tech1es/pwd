<?php 
function koneksi(){
 $server = "localhost";
 $username = "root";
 $password = "";
 $database = "web_dasar_a1_2109010034_muhammadiqbalfaiz";
 return mysqli_connect(
    $server, $username, $password, $database
 );
}



?>