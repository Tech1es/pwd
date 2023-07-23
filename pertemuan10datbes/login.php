<?php 
require "controllers/functions.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
<form action="" method="post">    
    <h1 style="text-align: center;">Halaman Login</h1>
    <hr>
    <table>
        <tr>
            <th>Username</th>
            <td>:</td>
            <td>
                <input type="text" placeholder="Input username" name="username">
            </td>
        </tr>
        <tr>
            <th>Password</th>
            <td>:</td>
            <td>
                <input type="password" name="pw">
            </td>
        </tr>
        <th colspan="3">
            <button style="width: 100%" name="login">Login</button>
        </th>
    </table>
    
<p>Don't Have an Account? Please Sign Up <a href="registrasi.php">Here</a></p>

    <?php 
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $pw = $_POST["pw"];
        if (user_satu_jumlah($username) > 0) {
            if (password_verify($pw, user_satu($username, "password"))) {
                echo "<script>
                alert('Login Succeeded! Welcome')
                location='../pertemuan10datbes/'
                </script>";
                session_start();
                $_SESSION["username"] = $username;
            } else {
                echo "<script>
                alert('Password not matched!')
                </script>";
            }
        } else {
            echo "<script>
            alert('Username not found!')
            </script>";
        }
    }
    ?>

</body>
</form>
</html>