<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kategori = $_POST['kategori'];
$berat = $_POST['berat'];
$tanggal = $_POST['tanggal'];
$lokasi = $_POST['lokasi'];

// Hitung poin (1 kg = 10 poin untuk semua kategori biar gampang)
$poin = $berat * 10;

// Simpan ke tabel sampah
$query = "INSERT INTO sampah (nama, email, alamat, kategori, berat, tanggal, lokasi, poin) 
          VALUES ('$nama', '$email', '$alamat', '$kategori', '$berat', '$tanggal', '$lokasi', '$poin')";

if (mysqli_query($conn, $query)) {
    // Tambah poin ke user
    mysqli_query($conn, "UPDATE user SET total = total + $poin WHERE email='$email'");
    header("Location: konfirm.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>