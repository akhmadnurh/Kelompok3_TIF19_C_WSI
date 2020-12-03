<?php
    require "koneksi.php";
    session_start();
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $sql = "select * from user where email='$email'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
    if($data["password"] == $password && $data["email"] == $email){
        header("Location: index.php?pesan=berhasil");
        $_SESSION["login"] = 1;
        $_SESSION["id"] = $data["id"];
    }else{
        header("Location: login.php?pesan=gagal");
    }

?>