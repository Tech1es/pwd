<?php 
include "controllers/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign-Up Page</h1>
    <form action="" method="post">
    <table>
        <tr>
            <th>Username</th>
            <td>:</td>
            <td>
                <input type="text" placeholder="Input username" name="username" value="<?= @$_POST["username"] ?>">
            </td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td>:</td>
            <td>
                <input type="email" placeholder="Input email" name="email" value="<?= @$_POST["email"] ?>">
            </td>
        </tr>
        <tr>
            <th>Password</th>
            <td>:</td>
            <td>
                <input type="password" name="pw1" value="<?= @$_POST["pw1"] ?>">
            </td>
        </tr>
        <tr>
            <th>Confirm Password</th>
            <td>:</td>
            <td>
                <input type="password" name="pw2" value="<?= @$_POST["pw2"] ?>">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <button type="submit" name="registrasi" style="width: 100%;">Sign Up</button>
            </td>
        </tr>
    </table>
    </form>

    <?php
    if (isset($_POST["registrasi"])) { 
        // var_dump($_POST);
        $username = $_POST["username"];
        $email = $_POST["email"];
        $pw1 = $_POST["pw1"];
        $pw2 = $_POST["pw2"];
        if ($username == "") {
            echo "<script>
            alert('Please input Username!')
            </script>";
        }elseif ($email == "") {
            echo "<script>
            alert('Please input Email!')
            </script>";
        }elseif ($pw2 != $pw1) {
            echo "<script>
            alert('Password doesn't match!')
            </script>";
        }else {
            $encrypt_pw = password_hash($pw1, PASSWORD_DEFAULT);
             $tanggaledit = date("Y-m-d H:i:s");
            $registrasi = q("INSERT INTO user VALUES(null, '$username', '$email', '$encrypt_pw', '$tanggaledit','$tanggaledit', '')");
            if ($registrasi) {
                echo "<script>
                alert('Sign-Up Completed!, Please Login')
                location='login.php'
                </script>";
            }else {
                echo "<script>
                alert('Username sudah ada sebelumnya!'
                </script>";
            }
        }
    }
    ?>

</body>
</html>