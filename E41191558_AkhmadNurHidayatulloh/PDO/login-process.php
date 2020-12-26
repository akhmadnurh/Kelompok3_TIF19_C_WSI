<?php
    require_once "connection.php";
    session_start();
    $email = $_POST["email"];
    $pass = $_POST["password"];
    
    // SQL
    $sql = "select * from user where email='$email' and password='$pass'";

    // Ekeskusi Query
    $query = $dbh->query($sql);
    
    // Menghitung total data
    $rows = $query->fetchAll();
    $num_rows = count($rows);
    
    if($num_rows == 1){
        $_SESSION["status"] = "online";
        header("Location: index.php");
    }else{
        header("Location: login.php?status=failed");
    }


?>