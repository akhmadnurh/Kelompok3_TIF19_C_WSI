<?php
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];
$querysql = mysqli_query($koneksi, "SELECT * FROM login where email='$email'");
$data = mysqli_fetch_array($querysql);
if ($email == $data['email']) {
    if ($password == $data['password']) {
        session_start();
        $_SESSION['email'] = $email;
        header("location:index.php?pesan=berhasil");
    } else {
        header("location:login.php?pesan=gagal");
        }
    }
    
?>