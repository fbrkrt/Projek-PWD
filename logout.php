<?php
session_start();
include "cek-cookie.php";
// Hapus semua session
session_destroy();

// Hapus cookie remember me
setcookie('remember_email', '', time() - 3600, "/");
setcookie('remember_password', '', time() - 3600, "/");

header("Location: index.php");
exit;
?>