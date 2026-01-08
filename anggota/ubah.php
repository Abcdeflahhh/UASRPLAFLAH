<?php
include "../config/database.php";

// Validasi ID
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];
$data = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM anggota WHERE id_anggota='$id'")
);

if (!$data) {
    echo "Data anggota tidak ditemukan!";
    exit;
}

// Proses update
if (isset($_POST['update'])) {
    $nama    = $_POST['nama'];
    $alamat  = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $query = "UPDATE anggota SET
                nama='$nama',
                alamat='$alamat',
                no_telp='$no_telp'
              WHERE id_anggota='$id'";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal mengubah data anggota!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Data Anggota</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
        }

        .container {
            max-width: 520px;
            background: #fff;
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

        .btn-back {
            background: #6c757d;
            color: #fff;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
        }

        .btn-back:hover {
            background: #5a6268;
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
    <h2>✏️ Ubah Data Anggota</h2>

    <form method="post">
        <label>Nama Anggota</label>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required>

        <label>Alamat</label>
        <textarea name="alamat" rows="3" required><?= $data['alamat'] ?></textarea>

        <label>No Telepon</label>
        <input type="text" name="no_telp" value="<?= $data['no_telp'] ?>" required>

        <div class="btn-group">
            <a href="index.php" class="btn-back">⬅ Batal</a>
            <button type="submit" name="update">💾 Update</button>
        </div>
    </form>

    <div class="footer">
        Sistem Informasi Perpustakaan
    </div>
</div>

</body>
</html>
