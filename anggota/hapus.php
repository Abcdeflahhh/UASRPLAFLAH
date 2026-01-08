<?php
include "../config/database.php";

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];

// Ambil data anggota
$data = mysqli_fetch_assoc(mysqli_query(
    $conn,
    "SELECT * FROM anggota WHERE id_anggota='$id'"
));

if (!$data) {
    header("Location: index.php");
    exit;
}

// Jika tombol hapus ditekan
if (isset($_POST['hapus'])) {
    $query = "DELETE FROM anggota WHERE id_anggota='$id'";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menghapus data anggota!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hapus Data Anggota</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(120deg, #8e0e00, #c0392b);
        }

        .container {
            width: 420px;
            margin: 100px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 12px 25px rgba(0,0,0,0.3);
            text-align: center;
        }

        h2 {
            color: #c0392b;
            margin-bottom: 15px;
        }

        p {
            color: #444;
            margin-bottom: 20px;
        }

        .info {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
            text-align: left;
        }

        .btn-hapus {
            background: #c0392b;
            color: #fff;
            border: none;
            padding: 12px 18px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            font-weight: bold;
            margin-right: 10px;
        }

        .btn-hapus:hover {
            background: #8e0e00;
        }

        .btn-batal {
            background: #6c757d;
            color: #fff;
            padding: 12px 18px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-batal:hover {
            background: #5a6268;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>⚠️ Konfirmasi Hapus Anggota</h2>

    <p>Apakah Anda yakin ingin menghapus data anggota berikut?</p>

    <div class="info">
        <strong>Nama:</strong> <?= $data['nama'] ?><br>
        <strong>Alamat:</strong> <?= $data['alamat'] ?><br>
        <strong>No. Telp:</strong> <?= $data['no_telp'] ?>
    </div>

    <form method="post">
        <button type="submit" name="hapus" class="btn-hapus">
            🗑️ Ya, Hapus
        </button>
        <a href="index.php" class="btn-batal">
            ❌ Batal
        </a>
    </form>

    <div class="footer">
        Sistem Informasi Perpustakaan
    </div>
</div>

</body>
</html>
