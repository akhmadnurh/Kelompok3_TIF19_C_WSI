</php
session_start();


echo "<pre>";
print_r($_SESSION['keranjang']);
echo "</pre>";

$koneksi = new mysqli("localhost","root","","");

if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
    echo "<script>alert('keranjang kosong, silahkan belanja terlebih dahulu');</script>"
    echo "<script>location='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>KERANJANG</title>
    <link rel="stylesheet" href="">
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-nav">
    <div class="container">

        <ul class="nav navbar-nav">
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <!-- jika sudah login(ada session pelanggan) -->
            <?php if (isset($_SESSION["pelanggan"])); ?>
                <li><a href="logout.php">LOGOUT</a></li>
            <!-- selain itu[belum login](belum ada session pelanggan) -->
            <?php else ?>
            <li><a href=""></a></li>
            <?php endif ?>
            <li><a href=""></a></li>
        </ul>
    </div>
</nav>


<section class="konten">
    <div class="container">
        <h1>KERANJANG</h1>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah); ?>
                <!-- menampilkan produk berdasarkan id_produk -->
                <?php
                $ambil = $koneksi->query("SELECT * FROM produk
                    WHERE id_produk= '$id_produk'");
                $pecah = $ambil->fetch_assoc();
                $subharga = $pecah["harga_produk"]*$jumlah;
                echo "<pre>";
                print_r($pecah);
                echo "</pre>";
                ?>
                <tr>
                    <td><?php echo $pecah["nama_produk"]; ?></td>
                    <td>Rp. <?php echo number_format($pecah["harga_produk"]); ?></td>
                    <td><?php echo $jumlah; ?></td>
                    <td>Rp. </php echo number_format($subharga); ?></td>
                    <td>
                        <a href="hapuskeranjang.php?id=<?php echo $id_produk ?>" class="btn btn-danger btn-xs">X</a>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <a href="index.php" class="btn btn-default">LANJUTKAN BELANJA</a>
        <a href="checkout.php"  class="btn btn-primary">CHECKOUT</a>      
    </div>
</section>



</body>
</html>