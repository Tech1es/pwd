<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pertemuan 3 Praktikum</title>
  </head>
  <body>
    <h1>Form Input Mahasiswa</h1>
    <form action="" method="post"></form>
    <table>
      <tr>
        <td>NPM</td>
        <td>:</td>
        <td><input type="Number" name="NPM"/></td>
      </tr>
      <tr>
        <td>Student's Name</td>
        <td>:</td>
        <td><input type="text" name="nama_mahasiswa"/></td>
      </tr>
      <tr>
        <td>Birth Date</td>
        <td>:</td>
        <td><input type="date" name="tgl_lahir"/></td>
      </tr>
      <tr>
        <td>Major</td>
        <td>:</td>
        <td>
          <select name="major">
            <option value="" selected>Choose Major</option>
            <option>Information System</option>
            <option>Technology Information</option>
            <option>Data Science</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Address</td>
        <td>:</td>
        <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
      </tr>
      <tr>
        <td colspan="3" style="text-align: right">
          <button style="background-color: green; color: aliceblue" name="save">Save</button>
          <button type="submit" style="background-color: brown; color: aliceblue" name="cancel">Cancel</button>
        </td>
      </tr>
    </table>
    </form>

    <table>
      <tr>
        <th>NPM</th>
        <td>:</td>
        <td><?php echo $_GET["NPM"] ?></td>
      </tr>
        <th>Nama Mahasiswa</th>
        <td>:</td>
        <td><?php echo $_GET["nama_mahasiswa"] ?></td>
      <tr>
        <th>Tanggal Lahir</th>
        <td>:</td>
        <td><?php echo $_GET["tgl_lahir"] ?></td>
      </tr>
    </table>
    <?php 
    echo $_GET["tgl_lahir"];
    var_dump($_GET);
    ?>
  </body>
</html>
