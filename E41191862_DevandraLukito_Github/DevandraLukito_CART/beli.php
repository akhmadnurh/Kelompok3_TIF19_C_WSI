<?php

// mendapatkan id_poroduk dar url
$id_produk = $_GET['id'];


// jk sudah ada produk itu di keranjang, maka produk itu jumlahnya
if(isset($_SESSION['keranjang'][$id_product]))
{
    $_SESSION['keranjang'][$id_product]+=1;
}
// selain itu (belum ada di keranjang), maka produk itu dianggap dibeli 1
else
{
    $_SESSION['keranjang'][$id_product] = 1;
}



// echo "<pre>";
// print r($_SESSION);
// echo "</pre>";

//larikan ke halaman keranjang
echo "<script>alert('produk telah ditambahkan ke keranjang belanja');</script>";
echo "<script>location='keranjang.php';</script>";
?>