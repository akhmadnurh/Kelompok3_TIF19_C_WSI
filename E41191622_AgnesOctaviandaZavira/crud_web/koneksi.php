<?php

$koneksi = mysqli_connect("localhost", "root", "", "crud_web");

if(mysqli_connect_error()){
    echo "KONEKSI DATABASE GAGAL : " . mysqli_connect_error();
}
?>