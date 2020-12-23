<?php
session_start();
$id_produk=$_GET["id"];
unset($_SESSION["keranjang"][$id_produk]);

    echo "<script>alert('keranjang kosong, silahkan belanja terlebih dahulu');</script>"
    echo "<script>location='index.php';</script>";
?>