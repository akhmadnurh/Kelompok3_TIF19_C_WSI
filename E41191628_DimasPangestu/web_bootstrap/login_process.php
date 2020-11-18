<?php
$email = $_POST['email'];
$password = $_POST['password'];
$email_saya = "dimaspangestu19@gmail.com";
$password_saya = "pgst123";
if ((strcasecmp($email_saya, $email) == 0) && (strcasecmp($password_saya, $password) == 0)) {
    session_start();
    $_SESSION['email'] = $email;
    header("location:index.php?pesan=berhasil");
} else {
    header("location:login.php?pesan=gagal");
}
?>