<?php
include "koneksi.php";
if(isset($_GET['id'])){
    $id_buku = $_GET['id'];
} else {
    header("Location: tampil_buku.php");
    exit();
}

$query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id_buku'");
$hasil = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1) {
    die("Data buku tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Update Buku</title>
    <style>
        body {
            background-image: url('gambar7.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Segoe UI', serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .update-box {
            background: rgba(255, 255, 255, 0.85); 
            backdrop-filter: blur(10px);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
            border: 2px solid #1a1a1a;
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
        }

        h3 { 
            color: #1a1a1a; 
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 25px;
            border-bottom: 2px solid #1a1a1a;
            padding-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            font-size: 13px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #1a1a1a;
            border-radius: 8px;
            box-sizing: border-box;
            background: rgba(255, 255, 255, 0.9);
            font-family: inherit;
        }

        input[readonly] { 
            background-color: #f1f1f1; 
            color: #777;
            border: 1px dashed #999;
        }

        .btn-update {
            background-color: #1a1a1a;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .btn-update:hover { 
            background-color: #444;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #1a1a1a;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="update-box">
        <h3>Update Informasi Buku</h3>
        
        <form method="POST" action="proses_ubah_buku.php">
            <label>KODE BUKU</label>
            <input type="text" name="id_buku" value="<?php echo $hasil['id_buku']; ?>" readonly>
            
            <label>JUDUL LENGKAP</label>
            <input type="text" name="judul" value="<?php echo $hasil['judul']; ?>" required placeholder="Masukkan judul baru...">
            
            <input type="submit" name="update" value="Simpan Perubahan" class="btn-update">
            
            <a href="tampil_buku.php" class="back-link">Batal & Kembali</a>
        </form>
    </div>

</body>
</html>