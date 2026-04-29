<?php
include "koneksi.php";
if (isset($_POST["simpan"])){
    $id = $_POST["id_anggota"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];

    $sql = "INSERT INTO anggota VALUES ('$id', '$nama', '$alamat')";
    $hasil = mysqli_query($koneksi, $sql);

    if($hasil){
        header("Location: tampil_anggota.php");
    } else {
        echo "Gagal disimpan: " . mysqli_error($koneksi);
    }
}
?>