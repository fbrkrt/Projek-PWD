<?php
session_start();
include "cek-cookie.php";

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit;
}
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
<body class="body-input">
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
                <li><a href="regis.php">Registrasi</a></li> 
                <li><a href="tukar.php">Rewards</a></li> 
                <li><a href="index.php?#categories">Categories</a></li> 
                <li><a href="contact.php">Contact</a></li> 
                <li><a href="kelola-sampah.php" class="garis-bawah">Riwayat</a></li>
                <li><a href="edit-profil.php" class="garis-bawah">Profil</a></li>
            </ul>
        </div>

        <div class="get-started">
            <a href="form.php">Get Started</a>
        </div>
    </nav>

    <form action="proses-input.php" method="POST" class="form-input">
        <div class="judul-form">
            <label>Input Sampah</label> 
            <label>Silakan isi detail sampah yang akan disetorkan</label> <br>
        </div>

    <div class="row mb-3">
    <label for="inputNama3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputNama3" name="nama" required>
    </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-5">
        <input type="email" class="form-control" id="inputEmail3" name="email" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" id="inputAlamat" name="alamat" required>
        </div>
    </div>
    
    <div class="option-form">
        <label for="selectKategori" class="col-sm-2 col-form-label">Kategori Sampah</label>
        <select name="kategori" id="kategori" required>
            <option value="">-- Kategori --</option>
            <option>Sampah Plastik</option>
            <option>Sampah Kertas</option>
            <option>Sampah Logam</option>
            <option>Sampah Kaca</option>
            <option>Sampah Organik</option>
            <option>Sampah Elektronik</option>
        </select>
    </div>

    <div class="row mb-3">
        <label for="inputBerat" class="col-sm-2 col-form-label">Berat Sampah (kg)</label>
        <div class="col-sm-5">
        <input type="number" class="form-control" id="inputBerat" name="berat" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputTanggal" class="col-sm-2 col-form-label">Tanggal Setor</label>
        <div class="col-sm-5">
        <input type="date" class="form-control" id="inputTanggal" name="tanggal" required>
        </div>
    </div>

    <div class="col-sm-5">
        <label class="col-form-label col-sm-2 pt-0">Lokasi/Cabang</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="lokasi" id="gridRadios1" value="Bank Sampah A">
            <label class="form-check-label" for="gridRadios1">Bank Sampah A</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="lokasi" id="gridRadios2" value="Bank Sampah B">
            <label class="form-check-label" for="gridRadios2">Bank Sampah B</label>
        </div>
    </div>
    </fieldset>
    <div class="row mb-3">
        <div class="col-sm-5 offset-sm-2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1" required>
            <label class="form-check-label" for="gridCheck1">
            Saya setuju dengan syarat dan ketentuan yang berlaku
            </label>
        </div>
        </div>
    </div>
    <div class="subres">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </div>
    </form>
</body>
</html>