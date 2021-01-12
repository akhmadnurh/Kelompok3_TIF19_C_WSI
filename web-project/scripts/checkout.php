<?php
    session_start();
    require_once "connection.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .marg {
            margin-top: 10rem !important;
            margin-bottom: 10rem !important;
        }
        .table > tbody > tr > td {
            vertical-align: middle;
        }
    </style>

    <title>Checkout</title>
  </head>
  <body>
    <?php include 'nav.php' ?>
    <div class="container marg">
        <div class="card">
            <div class="card-header">
                <h3>Alamat Pengiriman</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-bordered">
                        <?php
                            $id_user = $_SESSION["id_user"];
                            $sql = "SELECT * FROM user where id_user=$id_user";
                            $query = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_array($query);
                          
                        ?>
                        <tr>
                            <td>Nama</td>
                            <td><?php echo $data["nama"];  ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $data["email"];  ?></td>
                        </tr>
                        <tr>
                            <td>No. Hp</td>
                            <td><?php echo $data["nomor_wa"];  ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?php echo $data["alamat"];  ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h3>Rincian Pesanan</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">

                    <?php
                        $sql = "SELECT * FROM cart inner join produk on cart.id_produk = produk.id_produk inner join gambar on produk.id_produk = gambar.id_produk where id_user=$id_user";
                        $query2 = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($query2);
                        $total = 0;
                        if($count < 1){
                            echo "<h1>Checkout Kosong</h1>";
                        }else{
                            $nomor = 1;
                            $total = 0;
                            while($data2 = mysqli_fetch_array($query2)){
                    
                            
                    ?>
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th colspan="3">Pesanan <?php echo $nomor; ?></th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td rowspan="4" width="20%"><img src="../<?php echo $data2["lokasi_gambar"]; ?>" class="w-100"></td>
                                    <td>Nama Barang</td>
                                    <td><?php echo $data2["nama_barang"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Warna</td>
                                    <td><?php echo $data2["warna"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Jumlah</td>
                                    <td><?php echo $data2["jumlah"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>Rp <?php echo number_format($data2["harga"], 0, "", "."); ?></td>
                                </tr>
                            </table>
                    <?php
                                $hitung = $data2["harga"] * $data2["jumlah"];
                                $total += $hitung;
                                $nomor++;
                            }
                        }
                                
                    ?>
                    

                    <table class="table mt-2">
                        <tr class="table-secondary">
                            <td>Total</td>
                            <td>Rp <?php echo number_format($total, 0, "", "."); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h3>Pembayaran</h3>
            </div>
            <div class="card-body">
                
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>