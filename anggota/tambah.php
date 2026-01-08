<?php
include "../config/database.php";

if (isset($_POST['simpan'])) {
    mysqli_query($conn, "INSERT INTO anggota VALUES (
        NULL,
        '$_POST[nama]',
        '$_POST[alamat]',
        '$_POST[no_telp]'
    )");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Anggota</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
        }

        .container {
            width: 100%;
            max-width: 500px;
            background: #ffffff;
            margin: 80px auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.2);
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
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin-bottom: 18px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #2a5298;
            box-shadow: 0 0 6px rgba(42,82,152,0.3);
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        button {
            background: #2a5298;
            color: #fff;
            border: none;
            padding: 10px 18px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
        }

        button:hover {
            background: #1e3c72;
        }

        .btn-back {
            background: #6c757d;
            text-decoration: none;
            color: #fff;
            padding: 10px 18px;
            border-radius: 6px;
            font-size: 14px;
        }

        .btn-back:hover {
            background: #5a6268;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>➕ Tambah Anggota</h2>

    <form method="post">
        <label>Nama Anggota</label>
        <input type="text" name="nama" required>

        <label>Alamat</label>
        <textarea name="alamat" rows="3" required></textarea>

        <label>No Telepon</label>
        <input type="text" name="no_telp" required>

        <div class="btn-group">
            <a href="index.php" class="btn-back">⬅ Kembali</a>
            <button type="submit" name="simpan">💾 Simpan</button>
        </div>
    </form>

    <div class="footer">
        Sistem Informasi Perpustakaan
    </div>
</div>

</body>
</html>
