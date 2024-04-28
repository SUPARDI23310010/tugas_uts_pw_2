<?php

$koneksi = mysqli_connect("localhost","root","","mahasiswa");

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $koneksi;
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $no_telp = htmlspecialchars($data["no_telp"]);

    $query = "INSERT INTO buku_telepo
    VALUES
    ('','$nama','$nim','$email','$no_telp')";

    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM buku_telepon WHERE id = '$id'");
    return mysqli_affected_rows($koneksi);
}

function ubah($data){
    global $koneksi;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $no_telp = htmlspecialchars($data["no_telp"]);

    $query = "UPDATE buku_telepon SET
    nama = '$nama',
    nim = '$nim',
    email = '$email',
    no_telp = '$no_telp'
    WHERE id = $id
    ";

    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}

function cari($keyword){
    $query = "SELECT * FROM buku_telepon
    WHERE
    nama LIKE '%$keyword%' OR
    nim LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    no_telp LIKE '%$keyword%'
    ";

    return query($query);
}

?>