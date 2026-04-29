<?php
include "koneksi.php";

if (isset($_POST['update'])){
    // Ambil data dari form
    $id_buku   = $_POST["id_buku"];
    $judul     = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $tahun     = $_POST["tahun"];

    // Query SQL untuk mengubah data
    $sql = "UPDATE buku SET 
            judul='$judul', 
            pengarang='$pengarang', 
            tahun='$tahun' 
            WHERE id_buku='$id_buku'";

    $hasil = mysqli_query($koneksi, $sql);

    if($hasil){
        // Jika berhasil, balik ke halaman tampil data buku
        header("Location: tampil_buku.php");
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Gagal memperbarui data buku: " . mysqli_error($koneksi);
    }
}
?>