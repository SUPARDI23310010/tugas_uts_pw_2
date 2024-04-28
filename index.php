<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM buku_telepon");
if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Buku Telepon</title>
</head>
<body>
    <h1>Daftar Telepon</h1>

    <a href="tambah.php">Tambah Data Telepon</a>
    <br></br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan kata kunci pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>No.Telp</th>
            <th>Email</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i?></td>
                <td>
                    <a href="ubah.php?id=<?= $mhs['id']; ?>">ubah</a>
                    <a href="hapus.php?id=<?= $mhs['id']; ?>">hapus</a>
                </td>
                <td><?= $mhs['nama']?></td>
                <td><?= $mhs['nim']?></td>
                <td><?= $mhs['no_telp']?></td>
                <td><?= $mhs['email']?></td>
            </tr>
        <?php endforeach?>
    </table>
</body>
</html>