<?php
    session_start();
    require_once "connection.php";
    $id_user = $_SESSION["id_user"];
    $id_produk = $_GET["id_produk"];
    $jumlah = $_GET["jumlah"];

    // Cek produk sudah ditambahkan ke keranjang oleh user
    $sql = "select * from cart where id_produk='$id_produk' and id_user='$id_user'";
    $query1 = mysqli_query($conn, $sql);
    $data = mysqli_num_rows($query1);
    if($data != 0){
        header("Location: cart.php?status=exist");
    }else{
        // Tambah produk ke keranjang
        $sql = "insert into cart values ('$id_user', '$id_produk', '$jumlah')";
        $query2 = mysqli_query($conn, $sql);
        if($query2){
            header("Location: cart.php?status=success");
        }
    }

    
?>