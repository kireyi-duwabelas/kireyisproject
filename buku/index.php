
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            background-image: url('rhiannon.jpg');
            background-position: center;
            backdrop-filter: blur(4px);
            min-height: 100vh;
            color: #333;
        }

        .container {
            padding: 40px 20px;
            max-width: 1100px;
            margin: auto;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 16px;
            opacity: 0.9;
        }

        .menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            text-decoration: none;
            color: #333;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.2);
        }

        .card h3 {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .card p {
            font-size: 14px;
            color: #666;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            color: white;
            font-size: 14px;
            opacity: 0.8;
        }

        .icon {
            font-size: 30px;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>

<div class="container">

    <div class="header">
        <h1>Sistem Perpustakaan</h1>
        <p>Kelola data anggota, buku, dan peminjaman dengan mudah</p>
    </div>

    <div class="menu">

        <a href="simpan_anggota.php" class="card">
            <div class="icon"></div>
            <h3>Input Anggota</h3>
            <p>Tambahkan anggota baru</p>
        </a>

        <a href="tampil_anggota.php" class="card">
            <div class="icon"></div>
            <h3>Data Anggota</h3>
            <p>Lihat semua anggota</p>
        </a>

        <a href="ubah_buku.php" class="card">
            <div class="icon"></div>
            <h3>Input Buku</h3>
            <p>Tambahkan koleksi buku</p>
        </a>

        <a href="tampil_buku.php" class="card">
            <div class="icon"></div>
            <h3>Data Buku</h3>
            <p>Lihat daftar buku</p>
        </a>

        <a href="peminjaman.php" class="card">
            <div class="icon"></div>
            <h3>Input Peminjaman</h3>
            <p>Catat transaksi peminjaman</p>
        </a>

    </div>

    <div class="footer">
        <p>© <?php echo date("Y"); ?> Perpustakaan</p>
    </div>

</div>

</body>
</html>