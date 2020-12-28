<?php
try{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "data";

    // Membuat koneksi
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    // Mengatur mode error
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    // Tampilkan pesan jika koneksi gagal
    echo "Koneksi gagal: ".$e->getMessage();
    die();
}

