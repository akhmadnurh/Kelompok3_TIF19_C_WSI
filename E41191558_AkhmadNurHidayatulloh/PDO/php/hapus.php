<?php

    require_once("koneksi.php");
    $no = $_GET["no"];

    // Menghapus data
    $sql = "delete from printer where no='$no'";

    $query = $dbh->query($sql);
    if($query){
        echo "Proses Berhasil!<br>";
        echo "<a href='../index.php'>Halaman Awal</a>";
    }  