<?php
require "function.php";

$id = $_GET["id"];

$mhs = query("SELECT * FROM buku_telepon WHERE id = $id")[0];

if(isset($_POST["submit"])){
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Diubah !')
        document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Diubah !')
        document.location.href = 'index.php'
        </script>
        ";
    }
    

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah Data Telepon</title>
</head>
<body>
    <h1>Ubah Data Telepon</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nim"> NIM : </label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="nama"> Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email"> Email : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="no_telp"> No.Telp : </label>
                <input type="text" name="no_telp" id="no_telp" required value="<?= $mhs["no_telp"]; ?>">
            </li>
            <br>
            <br>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>