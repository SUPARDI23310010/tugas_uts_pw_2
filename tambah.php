<?php
require "function.php";

if(isset($_POST["submit"])){
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Disimpan !')
        document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Disimpan !')
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
    <title>Halaman Tambah Data Telepon</title>
</head>
<body>
    <h1>Tambah Data Telepon</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nim"> NIM : </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama"> Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email"> Email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="no_telp"> No.Telp : </label>
                <input type="text" name="no_telp" id="no_telp" required>
            </li>
            <br>
            <br>
            <li>
                <button type="submit" name="submit">Simpan</button>
            </li>
        </ul>
    </form>
</body>
</html>