<?php
include "../config/database.php";

if (isset($_POST['simpan'])) {
    mysqli_query($conn, "INSERT INTO buku VALUES (
        NULL,
        '$_POST[judul]',
        '$_POST[pengarang]',
        '$_POST[penerbit]',
        '$_POST[tahun]',
        '$_POST[stok]'
    )");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(120deg, #1e3c72, #2a5298);
        }

        .container {
            width: 450px;
            margin: 70px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 12px 25px rgba(0,0,0,0.25);
        }

        h2 {
            text-align: center;
            color: #2a5298;
            margin-bottom: 25px;
        }

        label {
            font-weight: 600;
            display: block;
            margin-bottom: 6px;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #2a5298;
            box-shadow: 0 0 5px rgba(42,82,152,0.4);
        }

        .btn {
            width: 100%;
            padding: 12px;
            background: #2a5298;
            border: none;
            color: #fff;
            font-size: 15px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn:hover {
            background: #1e3c72;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #555;
            font-size: 14px;
        }

        .back:hover {
            color: #2a5298;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>➕ Tambah Data Buku</h2>

    <form method="post">
        <label>Judul Buku</label>
        <input type="text" name="judul" required>

        <label>Pengarang</label>
        <input type="text" name="pengarang" required>

        <label>Penerbit</label>
        <input type="text" name="penerbit">

        <label>Tahun Terbit</label>
        <input type="number" name="tahun">

        <label>Stok Buku</label>
        <input type="number" name="stok" required>

        <button type="submit" name="simpan" class="btn">
            💾 Simpan Data
        </button>
    </form>

    <a href="index.php" class="back">← Kembali ke Data Buku</a>

    <div class="footer">
        Sistem Informasi Perpustakaan
    </div>
</div>

</body>
</html>
