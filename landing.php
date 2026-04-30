<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trashbank - Berhasil Setor Sampah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="landing-page">
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
            </ul>
        </div>

        <div class="get-started">
            <a href="register.php">Get Started</a>
        </div>
    </nav>

    <section class="success-landing">
        <div class="success-card">
            <div class="success-icon">
                <i class="fas fa-leaf"></i>
                <i class="fas fa-recycle"></i>
                <i class="fas fa-tree"></i>
            </div>
            
            <?php
            include 'koneksi.php';
            
            $data = mysqli_query($conn, "SELECT * FROM sampah ORDER BY id DESC LIMIT 1");
            $row = mysqli_fetch_assoc($data);
            session_start();
            $nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : "Pengguna";
            ?>

            <h1>Selamat, <?php echo $nama; ?>! 🎉</h1>
            
            <div class="poin-box">
                <span class="poin-label">Kamu mendapatkan</span>
                <div class="poin-amount"><?php echo $row['poin']; ?> Poin</div>
            </div>
            
            <p class="thanks-message">Terima kasih sudah berkontribusi dalam merawat alam 🌿</p>
            <p class="eco-message">Setiap sampah yang kamu setor membantu menjaga bumi tetap hijau!</p>
            
            <div class="action-buttons">
                <a href="index.php" class="btn-home">
                    <i class="fas fa-home"></i> Kembali ke Home
                </a>
                <a href="tukar.php" class="btn-redeem">
                    <i class="fas fa-gift"></i> Tukar Poin Sekarang
                </a>
                <a href="input.php" class="btn-deposit">
                    <i class="fas fa-trash-alt"></i> Setor Lagi
                </a>
            </div>
        </div>
    </section>
</body>
</html>