<?php
    try{
        $host = "localhost";
        $dbname = "test";
        $user = "root";
        $pass = "";
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");

        // Set error mode
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        // Jika koneksi bermasalah
        echo "Koneksi bermasalah: ". $e->getMessage()."<br>";
        die();
    }
?>