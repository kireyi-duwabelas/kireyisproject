<!DOCTYPE html>
<html>
<head>
    <title>Input Anggota</title>
    <style>
        body {
            background-image: url('gambar3.jpg'); 
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
            background: rgba(255, 255, 255, 0.85); /* Putih transparan */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 400px;
            backdrop-filter: blur(5px); /* Efek blur kaca di belakang form */
            border: 2px solid #2c3e50;
        }

        h3 {
            margin-bottom: 25px;
            color: #2c3e50;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 13px;
            color: #34495e;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #bdc3c7;
            border-radius: 8px;
            box-sizing: border-box;
            background: rgba(255, 255, 255, 0.9);
        }

        .btn-submit {
            background: #2c3e50; 
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-submit:hover {
            background: #1a252f;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<div class="form-card">
    <h3>Tambah Anggota</h3>
    <form method="POST" action="proses_simpan_anggota.php">
        <label>ID ANGGOTA</label>
        <input type="text" name="id_anggota" placeholder="Contoh: A001" required>

        <label>NAMA LENGKAP</label>
        <input type="text" name="nama" required>

        <label>ALAMAT</label>
        <textarea name="alamat" rows="3" required></textarea>

        <button type="submit" name="simpan" class="btn-submit">Simpan Data</button>
        <p align="center">
            <a href="tampil_anggota.php" style="font-size:12px; color:#2c3e50; text-decoration:none; font-weight:bold;">
                 Kembali ke Daftar
            </a>
        </p>
    </form>
</div>

</body>
</html>