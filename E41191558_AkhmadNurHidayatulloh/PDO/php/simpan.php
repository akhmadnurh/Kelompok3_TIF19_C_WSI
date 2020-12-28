<?php

    require_once("koneksi.php");
    $merk = $_POST["merk"];
    $warna = $_POST["warna"];
    $jumlah = $_POST["jumlah"];

    // Jika no sudah diatur, maka akan melakukan update
    // Jika tidak, maka akan melakukan tambah data
    $sql = "";
    if(isset($_POST["no"])){
        $no = $_POST["no"];
        $sql = "update printer set nama_merek='$merk', warna='$warna', jumlah='$jumlah' where no='$no'";
        
    }else{
        $sql = "insert into printer(nama_merek, warna, jumlah) value('$merk','$warna','$jumlah')";
        
    }
    
    $query = $dbh->query($sql);
    if($query){
        echo "Proses Berhasil!<br>";
        echo "<a href='../index.php'>Halaman Awal</a>";
    }
