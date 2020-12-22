<?php

    $url = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "hi.valeeqa";

    $conn = mysqli_connect($url, $user, $pass, $db_name);

    if(!$conn){
        echo "Error".mysqli_connect_error();
    }
    
?>