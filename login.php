<!-- login -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYO REGISTRASI AKUN</title>
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

    <div class="container">
        <h1>LOGIN AKUN</h1>
        <form action="proseslogin.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat email">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Masukkan password">
            </div>
             <button type="submit" class="btn btn-success">LOGIN</button>
            <button type="reset" class="btn btn-secondary">RESET</button>
        </form>
    </div>
</body>

</html>