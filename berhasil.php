<?php
session_start();

if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
                <li><a href="index.php" class="garis-bawah">Home</a></li> 
                <li><a href="regis.php" class="garis-bawah">Registrasi</a></li> 
                <li><a href="tukar.php" class="garis-bawah">Rewards</a></li> 
                <li><a href="index.php?#categories" class="garis-bawah">Categories</a></li> 
                <li><a href="contact.php" class="garis-bawah">Contact</a></li> 
                <li><a href="kelola-sampah.php" class="garis-bawah">Riwayat</a></li>
                <li><a href="edit-profil.php" class="garis-bawah">Profil</a></li>
            </ul>
        </div>

        <div class="get-started">
            <a href="form.php">Get Started</a>
        </div>
    </nav>

    <div class="card text-center">
        <div class="card-header">
            LOGIN SUCCESFUL✅
        </div>
        <div class="card-body">
            <h2 class="card-title">Selamat datang di trashbank <?= $_SESSION['nama']; ?></h2>
            <h3 class="card-text">Kamu mau apa?</h3><br>
            <div class="card border-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">Input Sampah</div>
                <div class="card-body">
                    <p class="card-text">Masukkan sampahmu sekarang dan tukarkan poinmu!</p>
                    <a href="input.php" class="btn btn-primary">Input Sampah Sekarang</a>
                </div><br><br><br>

                <div class="card-header">Kembali ke Home</div>
                <div class="card-body">
                    <p class="card-text">Kembali ke halaman utama dan lihat fitur lainnya</p>
                    <a href="index.php" class="btn btn-primary">Home</a>
                </div>
            </div>
 
        </div>
        <div class="card-footer text-body-secondary">
            “Trash Today, Cash Tomorrow”
        </div>
    </div>
</body>

</html>