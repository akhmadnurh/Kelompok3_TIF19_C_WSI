<?php

    // session_start();
    require "connection.php";
    $email = $_POST["email"];
    $pass = $_POST["pwd"];

    $query = mysqli_query($conn, "SELECT * FROM user WHERE pass='$pass'");
    $result = mysqli_num_rows($query);
    
    if($result == 1){
        $data = mysqli_fetch_array($query);
            //  Atur SESSION + Level Login
            header("Location: ../index.php");
            // $_SESSION["status"] = 1;
            // $_SESSION["level"] = $data["level"];

    }else{
        echo "login gagal";
    }
?>