<?php
include "koneksi.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM anggota WHERE id_anggota='$id'";
    $hasil = mysqli_query($koneksi, $sql);

    if($hasil) {
        header("Location: tampil_anggota.php");
    } else {
        echo "Gagal dihapus: " . mysqli_error($koneksi);
    }
}
?>