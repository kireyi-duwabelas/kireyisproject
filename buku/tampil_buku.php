<?php
include "koneksi.php";
$cari = isset($_GET['cari']) ? $_GET['cari'] : "";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Koleksi Buku</title>
    <style>
        body {
            background-image: url('gambar6.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Segoe UI', serif;
            margin: 0;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .main-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(8px); 
            width: 80%;
            max-width: 800px;
            padding: 30px;
            border-radius: 15px;
            border: 2px solid #1a1a1a;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        h2 {
            text-align: center;
            color: #1a1a1a;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 30px;
            border-bottom: 2px solid #1a1a1a;
            padding-bottom: 10px;
        }

        /* Styling Form Pencarian */
        .search-area {
            display: flex;
            justify-content: center;
            margin-bottom: 25px;
        }

        input[type="text"] {
            padding: 10px 15px;
            border: 1px solid #1a1a1a;
            border-radius: 5px 0 0 5px;
            width: 60%;
            outline: none;
        }

        button {
            padding: 10px 20px;
            background: #1a1a1a;
            color: white;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        button:hover {
            background: #444;
        }

            table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.5);
        }

        th {
            background: #1a1a1a;
            color: white;
            padding: 12px;
            text-transform: uppercase;
            font-size: 13px;
        }

        td {
            border-bottom: 1px solid #ccc;
            padding: 12px;
            text-align: center;
            color: #333;
        }

        tr:hover {
            background: rgba(0, 0, 0, 0.05);
        }

        .btn-edit {
            text-decoration: none;
            color: #2980b9;
            font-weight: bold;
            font-size: 13px;
        }

        .btn-edit:hover {
            text-decoration: underline;
        }

        .footer-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #1a1a1a;
            text-decoration: none;
            font-size: 12px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="main-card">
    <h2>Daftar Koleksi Buku</h2>

    <form method="GET" class="search-area">
        <input type="text" name="cari" placeholder="Masukkan judul buku..." value="<?= htmlspecialchars($cari) ?>">
        <button type="submit">Cari</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Aksi Manajemen</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM buku WHERE judul LIKE '%$cari%'";
            $sql = mysqli_query($koneksi, $query);
            
            if(mysqli_num_rows($sql) > 0) {
                while($d = mysqli_fetch_array($sql)){
                    echo "<tr>
                        <td><strong>{$d['id_buku']}</strong></td>
                        <td>{$d['judul']}</td>
                        <td>
                            <a href='ubah_buku.php?id={$d['id_buku']}' class='btn-edit'>Edit Data</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Data tidak ditemukan</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="tampil_anggota.php" class="footer-link">← Kembali ke Data Anggota</a>
</div>

</body>
</html>