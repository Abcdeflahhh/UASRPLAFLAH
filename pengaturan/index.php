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
<title>Pengaturan Sistem</title>
<style>
body{
    margin:0;
    font-family:'Segoe UI',Arial,sans-serif;
    background:linear-gradient(135deg,#1e3c72,#2a5298);
}
.container{
    max-width:700px;
    margin:60px auto;
    background:#fff;
    padding:35px;
    border-radius:14px;
    box-shadow:0 20px 40px rgba(0,0,0,.25);
}
h2{
    color:#2a5298;
}
form{
    margin-top:25px;
}
label{
    display:block;
    margin-bottom:6px;
    font-weight:600;
}
input{
    width:100%;
    padding:10px;
    margin-bottom:18px;
    border-radius:6px;
    border:1px solid #ccc;
}
button{
    background:#2a5298;
    color:#fff;
    border:none;
    padding:10px 18px;
    border-radius:6px;
    font-weight:600;
    cursor:pointer;
}
button:hover{
    background:#1e3c72;
}
.back{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    color:#2a5298;
    font-weight:600;
}
</style>
</head>
<body>

<div class="container">
    <h2>⚙️ Pengaturan Sistem</h2>

    <form method="post">
        <label>Nama Aplikasi</label>
        <input type="text" value="Sistem Informasi Perpustakaan">

        <label>Denda per Hari (Rp)</label>
        <input type="number" value="1000">

        <label>Batas Maksimal Peminjaman</label>
        <input type="number" value="3">

        <button type="submit">💾 Simpan Pengaturan</button>
    </form>

    <a href="../index.php" class="back">⬅ Kembali ke Menu Utama</a>
</div>

</body>
</html>
