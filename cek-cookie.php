<?php
// File ini bisa dipanggil di awal setiap halaman
session_start();

// Jika sudah login lewat session, skip
if(isset($_SESSION['email'])){
    return;
}

// Cek apakah ada cookie remember me
if(isset($_COOKIE['remember_email']) && isset($_COOKIE['remember_password'])){
    include "koneksi.php";
    
    $email = $_COOKIE['remember_email'];
    $password = $_COOKIE['remember_password'];
    
    $query = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
    
    if(mysqli_num_rows($query) > 0){
        $data = mysqli_fetch_assoc($query);
        
        if(password_verify($password, $data['password'])){
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['email'] = $data['email'];
        }
    }
}
?>