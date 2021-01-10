<?php
    //dsn = data source name
    $dsn = 'mysql:host=localhost;dbname=mhs';
    $username =  'root';
    $password = '';
    $options = [];
    

    try {
        $connection = new PDO($dsn, $username, $password, $options);
    } catch(PDOException $e) {
        echo "Koneksi gagal: ".$e->getMessage();
        die();
    }