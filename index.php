<?php
session_start();
include 'card.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trashbank</title>
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
                <li><a href="register.php" class="garis-bawah">Registrasi</a></li> 
                <li><a href="tukar.php" class="garis-bawah">Rewards</a></li> 
                <li><a href="#categories" class="garis-bawah">Categories</a></li> 
                <li><a href="#" class="garis-bawah">Contact</a></li> 
            </ul>
        </div>

        <div class="get-started">
            <a href="register.php">Get Started</a>
        </div>
    </nav>

    <section class="awalan-web">
        <div class="text-index">
            <h1>Turn Waste Into Rewards🌿</h1>
        </div>
        
        <div>
            <a href="input.php">Deposit Waste</a>
        </div>
    </section>

    <section id="categories" class="categories">
        <h3 class="section-title">Recycle Guide</h3>
        <p class="text-center">Kategori Sampah dan Bentuk Daur Ulang</p>
        <div class="d-flex gap- flex-wrap">
            <div class="card">
                <img src="./assets/sampah-plastik.jpg" class="card-img-top">
                <div class="card-body">
                    <h6>Sampah Plastik</h6>
                    <p>Smart and scalable mobile apps</p>
                    <a href="index.php?kategori=plastik" class="btn-card">Lihat Detail</a>
                </div>
            </div>

            <div class="card">
                <img src="./assets/sampah-kertas.jpg" class="card-img-top">
                <div class="card-body">
                    <h6>Sampah Kertas</h6>
                    <p>Smart and scalable mobile apps</p>
                    <a href="index.php?kategori=plastik" class="btn-card">Lihat Detail</a>
                </div>
            </div>

            <div class="card">
                <img src="./assets/sampah-logam.jpg" class="card-img-top">
                <div class="card-body">
                    <h6>Sampah Logam</h6>
                    <p>Clean and user friendly design</p>
                    <a href="index.php?kategori=logam" class="btn-card">Lihat Detail</a>
                </div>
            </div>

            <div class="card">
                <img src="./assets/sampah-kaca.jpg" class="card-img-top">
                <div class="card-body">
                    <h6>Sampah Kaca</h6>
                    <p>Reliable system maintenance</p>
                    <a href="index.php?kategori=kaca" class="btn-card">Lihat Detail</a>
                </div>
            </div>

            <div class="card">
                <img src="./assets/sampah-organik.jpg" class="card-img-top">
                <div class="card-body">
                    <h6>Sampah Organik</h6>
                    <p>Reliable system maintenance</p>
                    <a href="index.php?kategori=organik" class="btn-card">Lihat Detail</a>
                </div>
            </div>

            <div class="card">
                <img src="./assets/sampah-elektronik.jpg" class="card-img-top">
                <div class="card-body">
                    <h6>Sampah Elektronik</h6>
                    <p>Reliable system maintenance</p>
                    <a href="index.php?kategori=elektronik" class="btn-card">Lihat Detail</a>
                </div>
            </div>
        </div>
    </section>

    <section class="akhiran">
        <h3>Deposit Your Waste Today!</h3>
        <a href="input.php">Deposit Now</a>
        <div class="akhir-container">
            <div class="footer-bottom">
                <p><?php echo date("Y"); ?> Trashbank. All rights reserved.</p>
            </div>
        </div>
    </section>
</body>
</html>