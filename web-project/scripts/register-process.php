<?php

    // session_start();
    require_once "connection.php";
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $gender = $_POST["gender"];
    $wa = $_POST["wa"];
    $alamat = $_POST["alamat"];

    $query = mysqli_query($conn, "INSERT INTO user (email, pass, nama, jenis_kelamin, alamat, nomor_wa, level) VALUES ('$email', '$pass', '$nama', '$gender', '$alamat', '$wa', 0)");

    if($query){
        header("Location: login.php");
    }else{
        header("Location: register.php");
    }

?>