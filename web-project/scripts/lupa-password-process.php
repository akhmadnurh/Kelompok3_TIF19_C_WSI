<?php
    require_once "connection.php";

    $email = $_POST["email"];

    // Cek email sudah terdaftar atau belum
    $sql = "select id_user from user where email='$email'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_num_rows($query);
    if($data == 0){
        header("Location: lupa-password.php?status=not-found");
    }else{
        // Set status user menjadi lupa password
        $sql = "update user set lupa_password='ya' where email='$email'";
        $query2 = mysqli_query($conn, $sql);
        if($query2){
            header("Location: lupa-password.php?status=success");
        }
    }

    
?>