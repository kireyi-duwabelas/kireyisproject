<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman Buku</title>
    <style>
        body {
            background-image: url('gambar8.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Segoe UI', serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .loan-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(8px);
            padding: 35px;
            border-radius: 15px;
            border: 2px solid #1a1a1a;
            box-shadow: 0 10px 35px rgba(0,0,0,0.5);
            width: 100%;
            max-width: 500px;
        }

        h3 {
            text-align: center;
            color: #1a1a1a;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-bottom: 2px solid #1a1a1a;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 8px 0;
            color: #333;
            font-size: 14px;
            font-weight: 600;
        }

        input[type="text"], 
        input[type="date"], 
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #1a1a1a;
            border-radius: 6px;
            box-sizing: border-box;
            background: rgba(255, 255, 255, 0.8);
            font-family: inherit;
        }

        input:focus {
            outline: none;
            border: 2px solid #2c3e50;
            background: #fff;
        }

        .btn-simpan {
            background: #1a1a1a;
            color: white;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 8px;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            margin-top: 20px;
            transition: 0.3s;
        }

        .btn-simpan:hover {
            background: #444;
            letter-spacing: 1px;
        }

        .back-nav {
            display: block;
            text-align: center;
            margin-top: 15px;
            font-size: 12px;
            color: #666;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="loan-card">
    <h3>Form Peminjaman</h3>
    <form method="post" action="proses_simpan_peminjaman.php">
        <table>
            <tr>
                <td width="35%">Id Pinjam</td>
                <td><input type="text" name="id_pinjam" placeholder="P001..." required></td>
            </tr>
            <tr>
                <td>Id Anggota</td>
                <td><input type="text" name="id_anggota" required></td>
            </tr>
            <tr>
                <td>Nama Anggota</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Id Buku</td>
                <td><input type="text" name="id_buku" required></td>
            </tr>
            <tr>
                <td>Nama Buku</td>
                <td><input type="text" name="judul" required></td>
            </tr>
            <tr>
                <td>Tanggal Pinjam</td>
                <td><input type="date" name="tanggal_pinjam" required></td>
            </tr>
            <tr>
                <td>Lama Pinjam (Hari)</td>
                <td><input type="number" name="lama_pinjam" min="1" required></td>
            </tr>
        </table>
        
        <input type="submit" value="Simpan Peminjaman" name="simpan" class="btn-simpan">
        
        <a href="tampil_anggota.php" class="back-nav">Kembali ke Dashboard</a>
    </form>
</div>

</body>
</html>