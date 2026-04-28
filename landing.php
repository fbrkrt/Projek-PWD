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
                <li><a href="regis.php" class="garis-bawah">Registrasi</a></li> 
                <li><a href="tukar.php" class="garis-bawah">Rewards</a></li> 
                <li><a href="#categories" class="garis-bawah">Categories</a></li> 
                <li><a href="#" class="garis-bawah">Contact</a></li> 
            </ul>
        </div>

        <div class="get-started">
            <a href="form.php">Get Started</a>
        </div>
    </nav>

    <section>
                <?php
        include 'koneksi.php';
        
        $data = mysqli_query($conn, "SELECT * FROM sampah ORDER BY id DESC LIMIT 1");
        $row = mysqli_fetch_assoc($data);
        session_start();
        $nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : "Pengguna";
        ?>

<h1>Selamat, <?php echo $nama . ", kamu mendapat " . $row['poin'] . " poin"; ?>! 🎉</h1>
  <p>Terima kasih sudah berkontribusi dalam merawat alam🌿</p>
  <br>
  <ul>
    <li><a href="index.php" class="back-button">Back to Home</a></li>
  </ul>
    </section>
</body>
</html>