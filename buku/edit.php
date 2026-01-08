<?php
include "../config/database.php";

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$data = mysqli_fetch_assoc(mysqli_query(
    $conn,
    "SELECT * FROM buku WHERE id_buku=".$_GET['id']
));

if (isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE buku SET
        judul='$_POST[judul]',
        pengarang='$_POST[pengarang]',
        stok='$_POST[stok]'
        WHERE id_buku=".$_GET['id']
    );
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(120deg, #1e3c72, #2a5298);
        }

        .container {
            width: 420px;
            margin: 80px auto;
            background: #fff;
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
    <h2>✏️ Edit Data Buku</h2>

    <form method="post">
        <label>Judul Buku</label>
        <input type="text" name="judul" value="<?= $data['judul'] ?>" required>

        <label>Pengarang</label>
        <input type="text" name="pengarang" value="<?= $data['pengarang'] ?>" required>

        <label>Stok Buku</label>
        <input type="number" name="stok" value="<?= $data['stok'] ?>" required>

        <button type="submit" name="update" class="btn">💾 Update Data</button>
    </form>

    <a href="index.php" class="back">← Kembali ke Data Buku</a>

    <div class="footer">
        Sistem Informasi Perpustakaan
    </div>
</div>

</body>
</html>
