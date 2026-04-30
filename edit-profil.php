<?php
session_start();
include "koneksi.php";
include "cek-cookie.php";

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

$email = $_SESSION['email'];
$query = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
$user = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil - Trashbank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="nav-full">
        <div class="logo-web">
            <ul>
                <li><img src="./assets/logo.png" alt="logo bank sampah" style="width: 50px;"></li>
                <li><a href="index.php">Trashbank</a></li>
            </ul>
        </div>
        <div class="nav-container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="register.php">Registrasi</a></li>
                <li><a href="tukar.php">Rewards</a></li>
                <li><a href="index.php?#categories">Categories</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="kelola-sampah.php" class="garis-bawah">Riwayat</a></li>
                <li><a href="edit-profil.php" class="garis-bawah">Profil</a></li>
            </ul>
        </div>
        <div class="get-started">
            <a href="logout.php">Logout</a>
        </div>
    </nav>

    <div class="container" style="margin-top: 100px;">
        <h1>Edit Profil</h1>
        <form action="update-profil.php" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= htmlspecialchars($user['nama']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email (tidak bisa diubah)</label>
                <input type="email" class="form-control" id="email" value="<?= $user['email'] ?>" readonly disabled>
                <input type="hidden" name="email" value="<?= $user['email'] ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password Baru (kosongkan jika tidak ingin mengubah)</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password baru">
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Konfirmasi Password Baru</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Konfirmasi password baru">
            </div>
            <button type="submit" class="btn btn-success">Update Profil</button>
            <a href="berhasil.php" class="btn btn-secondary">Batal</a>
        </form>
        
        <hr>
        <div class="text-center mt-3">
            <a href="hapus-akun.php" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus akun? Semua data sampah Anda akan hilang!')">Hapus Akun</a>
        </div>
    </div>
</body>
</html>