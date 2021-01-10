<?php

    include "koneksi.php";
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $pekerjaan = $_POST["pekerjaan"];

    $query = "insert into user(nama, alamat, pekerjaan) value('$nama', '$alamat', '$pekerjaan')";
    mysqli_query($koneksi, $query);
    
    header("Location: index.php?pesan=input");
  

?>