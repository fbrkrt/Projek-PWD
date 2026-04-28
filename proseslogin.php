<?php
session_start();
include "koneksi.php";

$email = $_POST['email'];
$pass  = $_POST['pass'];

$query = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");

if(mysqli_num_rows($query) > 0){
    $data = mysqli_fetch_assoc($query);

    if(password_verify($pass, $data['password'])){
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['email'] = $data['email'];  // ← TAMBAHKAN BARIS INI
        header("Location: berhasil.php");
        exit;
    } else {
        echo "Password salah!";
    }
} else {
    echo "Email tidak ditemukan!";
}
?>