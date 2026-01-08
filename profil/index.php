<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

// Contoh data admin (bisa diganti dari database)
$nama = "Admin Perpustakaan";
$username = "admin";
$email = "admin@perpustakaan.com";
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Profil Admin</title>
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
.profile{
    margin-top:25px;
}
.profile p{
    font-size:15px;
    margin:10px 0;
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
    <h2>👤 Profil Admin</h2>

    <div class="profile">
        <p><strong>Nama:</strong> <?= $nama ?></p>
        <p><strong>Username:</strong> <?= $username ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Role:</strong> Administrator</p>
    </div>

    <a href="../index.php" class="back">⬅ Kembali ke Menu Utama</a>
</div>

</body>
</html>
