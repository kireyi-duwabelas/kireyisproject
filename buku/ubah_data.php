<?php
include "koneksi.php"; 
if(!isset($_GET["id"])){
    header('Location: tampil_anggota.php'); // 
    exit();
}

$id = $_GET["id"]; 
$sql = "SELECT * FROM anggota WHERE id_anggota='$id'"; 
$query = mysqli_query($koneksi, $sql);
$hasil = mysqli_fetch_assoc($query); 

if(mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Anggota</title>
    <style>
        body {
            background-image: url('gambar5.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Segoe UI', serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-card {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            width: 100%;
            max-width: 400px;
            backdrop-filter: blur(8px);
            border: 2px solid #1a1a1a;
        }
        h3 { text-align: center; color: #1a1a1a; text-transform: uppercase; letter-spacing: 2px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; font-size: 12px; color: #444; }
        input, textarea { 
            width: 100%; padding: 12px; margin-bottom: 20px; 
            border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;
        }
        .btn-update {
            background: #1a1a1a; color: white; border: none; padding: 12px; 
            width: 100%; border-radius: 5px; cursor: pointer; font-weight: bold;
        }
        .btn-update:hover { background: #333; }
    </style>
</head>
<body>

<div class="form-card">
    <h3>Ubah Data Anggota</h3>
    <form method="POST" action="proses_ubah.php">
        <label>ID ANGGOTA (Permanen)</label>
        <input type="text" name="id_anggota" value="<?php echo $hasil['id_anggota']; ?>" readonly style="background: #eee;"> <label>NAMA LENGKAP</label>
        <input type="text" name="nama" value="<?php echo $hasil['nama']; ?>" required> <label>ALAMAT</label>
        <textarea name="alamat" rows="3" required><?php echo $hasil['alamat']; ?></textarea> <button type="submit" name="simpan" class="btn-update">Simpan Perubahan</button>
        <p align="center"><a href="tampil_anggota.php" style="text-decoration:none; color:#666; font-size:12px;">Batal</a></p>
    </form>
</div>

</body>
</html>