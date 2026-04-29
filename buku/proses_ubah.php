<?php
include "koneksi.php";
if (isset($_POST['simpan'])){
    $id = $_POST["id_anggota"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];

    $sql = "UPDATE anggota SET nama='$nama', alamat='$alamat' WHERE id_anggota='$id'";
    $hasil = mysqli_query($koneksi, $sql);

    if($hasil){
        header("Location: tampil_anggota.php");
    } else {
        echo "Gagal diubah: " . mysqli_error($koneksi);
    }
}
?>