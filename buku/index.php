<?php
include "../config/database.php";
$data = mysqli_query($conn, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f9;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }

        h2 {
            text-align: center;
            color: #2a5298;
            margin-bottom: 25px;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn {
            background: #2a5298;
            color: #fff;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
        }

        .btn:hover {
            background: #1e3c72;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        th {
            background: #2a5298;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f1f4ff;
        }

        .stok {
            font-weight: bold;
            color: #2a5298;
        }

        .aksi a {
            margin-right: 8px;
            text-decoration: none;
            font-weight: 600;
        }

        .edit {
            color: #0d6efd;
        }

        .hapus {
            color: #dc3545;
        }

        .edit:hover {
            text-decoration: underline;
        }

        .hapus:hover {
            text-decoration: underline;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>📚 Data Buku</h2>

    <div class="top-bar">
        <span>Daftar buku yang tersedia</span>
        <a href="tambah.php" class="btn">➕ Tambah Buku</a>
    </div>

    <table>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; while($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['pengarang'] ?></td>
            <td class="stok"><?= $row['stok'] ?></td>
            <td class="aksi">
                <a href="edit.php?id=<?= $row['id_buku'] ?>" class="edit">✏️ Edit</a>
                <a href="hapus.php?id=<?= $row['id_buku'] ?>" class="hapus">🗑️ Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <div class="footer">
        Sistem Informasi Perpustakaan
    </div>
</div>

</body>
</html>
