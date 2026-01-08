<?php
include "../config/database.php";

$data = mysqli_query($conn, "
    SELECT a.nama, b.judul, p.tanggal_pinjam, p.status, p.denda
    FROM peminjaman p
    JOIN anggota a ON p.id_anggota = a.id_anggota
    JOIN buku b ON p.id_buku = b.id_buku
    ORDER BY p.tanggal_pinjam DESC
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Peminjaman</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f9;
        }

        .container {
            width: 95%;
            max-width: 1100px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }

        h2 {
            text-align: center;
            color: #2a5298;
            margin-bottom: 25px;
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
            text-align: center;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f1f4ff;
        }

        .status {
            font-weight: 600;
        }

        .dipinjam {
            color: #dc3545;
        }

        .kembali {
            color: #28a745;
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
    <h2>📊 Laporan Riwayat Peminjaman</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Anggota</th>
            <th>Judul Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Status</th>
            <th>Denda</th>
        </tr>

        <?php $no = 1; while($r = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $r['nama'] ?></td>
            <td><?= $r['judul'] ?></td>
            <td><?= date('d-m-Y', strtotime($r['tanggal_pinjam'])) ?></td>
            <td class="status <?= $r['status'] == 'dipinjam' ? 'dipinjam' : 'kembali' ?>">
                <?= ucfirst($r['status']) ?>
            </td>
            <td>Rp <?= number_format($r['denda'], 0, ',', '.') ?></td>
        </tr>
        <?php } ?>
    </table>

    <div class="footer">
        Sistem Informasi Perpustakaan | Laporan Peminjaman
    </div>
</div>

</body>
</html>
