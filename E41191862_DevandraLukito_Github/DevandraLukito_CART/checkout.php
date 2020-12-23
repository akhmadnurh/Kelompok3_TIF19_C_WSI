<?php
session_start();
$koneksi = new mysqli("localhost","root","","")

?>
<!DOCTYPE html>
<html>
<head>
    <title>CHECKOUT</title>
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
                   
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" readonly value="<?php echo $_SESSION["pelanggan"]["nama_pelanggan"]
                    ?>" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" readonly value="<?php echo $_SESSION["pelanggan"]["no_telepon_pelanggan"]
                    ?>" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <select class="form-control" name="id_ongkir">
                    <option value"">PILIH METODE PEMBAYARAN</option>
                    <option value"">TUNAI</option>
                    <option value"">TABUNGAN</option> 
                </div>
            </div>
        </form>
    </div>
</section>

<pre><?php print_r($_SESSION['pelanggan']) ?></pre>


</body>
</html>