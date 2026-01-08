<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<style>
body{
    margin:0;
    font-family:'Segoe UI',Arial,sans-serif;
    background:linear-gradient(135deg,#1e3c72,#2a5298);
}
.container{
    max-width:900px;
    margin:60px auto;
    background:#fff;
    padding:30px;
    border-radius:14px;
    box-shadow:0 20px 40px rgba(0,0,0,.25);
}
h2{
    color:#2a5298;
    margin-bottom:20px;
}
.stats{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:20px;
}
.card{
    background:#f4f6fb;
    padding:25px;
    border-radius:12px;
    text-align:center;
    box-shadow:0 8px 20px rgba(0,0,0,.1);
}
.card span{
    font-size:28px;
    font-weight:bold;
    color:#2a5298;
}
.back{
    display:inline-block;
    margin-top:25px;
    text-decoration:none;
    color:#2a5298;
    font-weight:600;
}
</style>
</head>
<body>

<div class="container">
    <h2>📊 Dashboard Statistik</h2>

    <div class="stats">
        <div class="card">
            📘<br>
            <span>120</span><br>Total Buku
        </div>
        <div class="card">
            👤<br>
            <span>45</span><br>Total Anggota
        </div>
        <div class="card">
            🔄<br>
            <span>18</span><br>Buku Dipinjam
        </div>
        <div class="card">
            ⏰<br>
            <span>5</span><br>Terlambat
        </div>
    </div>

    <a href="../index.php" class="back">⬅ Kembali ke Menu Utama</a>
</div>

</body>
</html>
