<?php
include "../config/database.php";

$pesan = "";

if (isset($_POST['pinjam'])) {
    $id_anggota = $_POST['id_anggota'];
    $id_buku    = $_POST['id_buku'];

    // Ambil data buku
    $buku = mysqli_fetch_assoc(mysqli_query($conn,
        "SELECT * FROM buku WHERE id_buku='$id_buku'"
    ));

    if (!$buku) {
        $pesan = "Buku tidak ditemukan!";
    } elseif ($buku['stok'] <= 0) {
        $pesan = "Stok buku habis, tidak dapat dipinjam!";
    } else {
        // Simpan peminjaman
        mysqli_query($conn, "INSERT INTO peminjaman VALUES (
            NULL,
            '$id_anggota',
            '$id_buku',
            CURDATE(),
            NULL,
            'Dipinjam',
            0
        )");

        // Kurangi stok buku
        mysqli_query($conn, "UPDATE buku SET stok = stok - 1 WHERE id_buku='$id_buku'");

        $pesan = "Peminjaman berhasil!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Transaksi Peminjaman</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
        }

        .container {
            max-width: 480px;
            background: #fff;
            margin: 90px auto;
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
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin-bottom: 18px;
        }

        input:focus {
            outline: none;
            border-color: #2a5298;
            box-shadow: 0 0 6px rgba(42,82,152,0.3);
        }

        button {
            width: 100%;
            background: #2a5298;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
        }

        button:hover {
            background: #1e3c72;
        }

        .alert {
            text-align: center;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 6px;
            font-size: 14px;
        }

        .success {
            background: #d4edda;
            color: #155724;
        }

        .error {
            background: #f8d7da;
            color: #721c24;
        }

        .footer {
            text-align: center;
            margin-top: 18px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>📚 Transaksi Peminjaman</h2>

    <?php if ($pesan != "") { ?>
        <div class="alert <?= $pesan == 'Peminjaman berhasil!' ? 'success' : 'error' ?>">
            <?= $pesan ?>
        </div>
    <?php } ?>

    <form method="post">
        <label>ID Anggota</label>
        <input type="number" name="id_anggota" required>

        <label>ID Buku</label>
        <input type="number" name="id_buku" required>

        <button type="submit" name="pinjam">📖 Pinjam Buku</button>
    </form>

    <div class="footer">
        Sistem Informasi Perpustakaan
    </div>
</div>

</body>
</html>
