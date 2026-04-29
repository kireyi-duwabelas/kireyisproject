<?php
include "koneksi.php";
if (isset($_POST["simpan"])){
    $id_pinjam = $_POST["id_pinjam"];
    $id_anggota = $_POST["id_anggota"];
    $nama = $_POST["nama"];
    $id_buku = $_POST["id_buku"];
    $judul = $_POST["judul"];
    $tanggal_pinjam = $_POST["tanggal_pinjam"];
    $lama_pinjam = $_POST["lama_pinjam"];

    $sql = "INSERT INTO anggota VALUES ('$id_pinjam', '$id_anggota', '$nama', '$id_buku', '$judul', '$tanggal_pinjam', 'lama_pinjam')";
    $hasil = mysqli_query($koneksi, $sql);

    if($hasil){
        header("Location: tampil_peminjaman.php");
    } else {
        echo "Gagal disimpan: " . mysqli_error($koneksi);
    }
}
?>