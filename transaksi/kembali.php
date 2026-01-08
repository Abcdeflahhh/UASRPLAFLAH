<?php
include "../config/database.php";

// Validasi ID
if (!isset($_GET['id'])) {
    header("Location: ../laporan/riwayat.php");
    exit;
}

$id = $_GET['id'];

// Ambil data peminjaman
$data = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_peminjaman='$id'")
);

if (!$data) {
    echo "Data peminjaman tidak ditemukan!";
    exit;
}

// Hitung keterlambatan (maks 0 hari jika belum telat)
$tanggal_pinjam = strtotime($data['tanggal_pinjam']);
$tanggal_sekarang = strtotime(date('Y-m-d'));

$lama_pinjam = ($tanggal_sekarang - $tanggal_pinjam) / (60 * 60 * 24);
$telat = max(0, $lama_pinjam - 7);

// Hitung denda (Rp 1.000 per hari)
$denda = $telat * 1000;

// Update status peminjaman
mysqli_query($conn, "UPDATE peminjaman SET
    status = 'Dikembalikan',
    tanggal_kembali = CURDATE(),
    denda = '$denda'
    WHERE id_peminjaman = '$id'
");

// Tambah stok buku kembali
mysqli_query($conn, "UPDATE buku SET stok = stok + 1 WHERE id_buku = '$data[id_buku]'");

// Redirect ke laporan
header("Location: ../laporan/riwayat.php");
exit;
