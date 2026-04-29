<?php 
include "koneksi.php"; 
$cari = isset($_GET['cari']) ? $_GET['cari'] : "";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistem Perpustakaan</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #b42020; margin: 40px; color: #444;
        background-image: url('gambar4.jpg')
    }
        .wrapper { max-width: 900px; margin: auto; background: #ffffff; padding: 30px; border-radius: 15px; border: 1px solid #eee; }
        h2 { color: #1e293b; font-weight: 600; margin-bottom: 25px; }
        
        .nav-table { display: flex; justify-content: space-between; margin-bottom: 20px; }
        .search-container input { padding: 9px 15px; border: 1px solid #e2e8f0; border-radius: 6px; width: 220px; outline: none; }
        .btn-cari { background: #1e293b; color: white; border: none; padding: 9px 15px; border-radius: 6px; cursor: pointer; }
        .btn-primary { background:rgb(4, 22, 61); color: white; padding: 10px 18px; text-decoration: none; border-radius: 6px; font-size: 14px; font-weight: 500; }

        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th { background: #80a3c5; border-bottom: 2px solid #758899; padding: 15px; text-align: left; font-size: 13px; text-transform: uppercase; color: #64748b; }
        td { padding: 15px; border-bottom: 1px solid #f1f5f9; font-size: 14px; }
        tr:hover { background: #c4daf0; }
        
        .action-btns a { text-decoration: none; font-weight: 600; font-size: 13px; }
        .edit-link { color: #3b82f6; margin-right: 12px; }
        .delete-link { color: #ef4444; }
    </style>
</head>
<body>

<div class="wrapper">
    <h2>Data Anggota</h2>

    <div class="nav-table">
        <a href="simpan_anggota.php" class="btn-primary">+ Registrasi</a>
        <form method="GET" class="search-container">
            <input type="text" name="cari" placeholder="Cari nama/alamat..." value="<?= $cari ?>">
            <button type="submit" class="btn-cari">Cari</button>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM anggota WHERE nama LIKE '%$cari%' OR alamat LIKE '%$cari%'";
            $sql = mysqli_query($koneksi, $query);
            while($d = mysqli_fetch_array($sql)) { ?>
                <tr>
                    <td><strong><?= $d['id_anggota'] ?></strong></td>
                    <td><?= $d['nama'] ?></td>
                    <td><?= $d['alamat'] ?></td>
                    <td class="action-btns">
                        <a href="ubah_data.php?id=<?= $d['id_anggota'] ?>" class="edit-link">Edit</a>
                        <a href="proses_hapus.php?id=<?= $d['id_anggota'] ?>" class="delete-link" onclick="return confirm('Hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>