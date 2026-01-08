<?php
session_start();

// Proteksi login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Sistem Informasi Perpustakaan</title>

<style>
body{
    margin:0;
    font-family:'Segoe UI',Arial,sans-serif;
    background:linear-gradient(135deg,#1e3c72,#2a5298);
}

/* Container */
.container{
    max-width:1000px;
    margin:60px auto;
    background:#fff;
    padding:35px 40px;
    border-radius:16px;
    box-shadow:0 20px 40px rgba(0,0,0,.25);
    position:relative;
}

/* Header */
.header{
    display:flex;
    align-items:center;
    gap:15px;
    border-bottom:2px solid #f0f0f0;
    padding-bottom:20px;
    margin-bottom:30px;
}
.header img{
    width:55px;
}
.header h2{
    margin:0;
    color:#2a5298;
}
.header span{
    font-size:14px;
    color:#666;
}

/* Logout */
.logout{
    position:absolute;
    top:25px;
    right:25px;
    background:#dc3545;
    color:#fff;
    padding:8px 14px;
    border-radius:6px;
    text-decoration:none;
    font-size:13px;
    font-weight:600;
}
.logout:hover{background:#b52a37}

/* Dashboard */
.dashboard{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:18px;
    margin-bottom:35px;
}
.card{
    background:linear-gradient(135deg,#f4f6fb,#eef1f8);
    padding:22px;
    border-radius:12px;
    text-align:center;
    box-shadow:0 8px 20px rgba(0,0,0,.1);
}
.card h3{
    margin:10px 0 5px;
    color:#2a5298;
    font-size:16px;
}
.card span{
    font-size:26px;
    font-weight:bold;
}

/* Menu */
.menu{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
    gap:16px;
}
.menu a{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
    padding:15px;
    background:#2a5298;
    color:#fff;
    text-decoration:none;
    border-radius:10px;
    font-weight:600;
    transition:.3s;
}
.menu a:hover{
    background:#1e3c72;
    transform:translateY(-3px);
}

/* Footer */
.footer{
    text-align:center;
    margin-top:40px;
    font-size:12px;
    color:#777;
}
</style>
</head>

<body>

<div class="container">

<a href="logout.php" class="logout"
onclick="return confirm('Yakin ingin logout?')">🚪 Logout</a>

<!-- HEADER -->
<div class="header">
    <img src="logo.png" alt="Logo Perpustakaan">
    <div>
        <h2>Sistem Informasi Perpustakaan</h2>
        <span>Dashboard & Menu Utama Aplikasi</span>
    </div>
</div>

<!-- DASHBOARD -->
<div class="dashboard">
    <div class="card">
        📘
        <h3>Total Buku</h3>
        <span>120</span>
    </div>
    <div class="card">
        👤
        <h3>Total Anggota</h3>
        <span>45</span>
    </div>
    <div class="card">
        🔄
        <h3>Buku Dipinjam</h3>
        <span>18</span>
    </div>
    <div class="card">
        ⏰
        <h3>Terlambat</h3>
        <span>5</span>
    </div>
</div>

<!-- MENU -->
<div class="menu">
    <a href="dashboard/index.php">📊 Dashboard</a>
    <a href="buku/index.php">📘 Manajemen Buku</a>
    <a href="anggota/index.php">👤 Manajemen Anggota</a>
    <a href="transaksi/pinjam.php">📥 Peminjaman</a>
    <a href="transaksi/kembali.php">📤 Pengembalian</a>
    <a href="laporan/riwayat.php">📑 Laporan</a>
    <a href="profil/index.php">👤 Profil Admin</a>
    <a href="pengaturan/index.php">⚙️ Pengaturan</a>
</div>

<div class="footer">
    <hr>
    <p>Aplikasi Perpustakaan | UAS RPL</p>
</div>

</div>

</body>
</html>
