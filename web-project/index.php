<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hi Valeeqa</title>
    <style>
        .slider{
            background-color: #d6c0b3; 
            border: 1px solid #d0d3d8; 
            height: 70px; 
            margin-top: 130px;
            margin-left: 25%;
            margin-right: 25%;
            padding: 5px; 
            text-align: center; 
        }
        .item-panel{
            margin-top:5em;
        }
        .result{
            width: 100%;
            margin-bottom: 20px;
            padding-top: 8px;
            border: 3px solid #ffffff;
        }
        .result:hover{
            border: 3px solid #fbf1f0;
        }
        .result-img{
            width: 230px;
            height: 345px;
            margin-right: auto;
            margin-left: auto;

        }
        .result-cost{
            background: #fbf1f0;
            padding: 15px;
            margin: 0px;
            text-align: right;
            border: 1px solid #fbf1f0;
            font-weight: bold;
        }
        .btn.more{
            padding: 8px;
            width: 120px;
            height: 50px;
            margin-bottom: 20px;
            line-height: 30px;
            border-radius: 0px;
            border: 1px solid black;
            background: black;
            color: white;
        }
        .garis {
            height: 1px;
            background: #dcdcdc;
            border: none;
            margin-top: 8px;
            margin-bottom: 8px;
        }
        .btn.more:hover{
            background: white;
            color: black;
            text-decoration: none;
        }
        .anchor-black, .anchor-black:hover{
            color: black;
            text-decoration: none;
            text-align: left;
        }
        .judul {
            margin-top: 8px;
            margin-left: 8px;
            margin-right: 8px;
            margin-bottom: 10px;
            font-size: 14px;
        }
    </style>
  </head>
  <body>
    <?php include "scripts/nav.php"; ?>
    <?php include "scripts/connection.php"; ?>
    <?php
        $query = ["SELECT id_kategori, nama_kategori from kategori", "SELECT produk.id_produk, produk.id_kategori, nama_barang, bahan, harga, best_seller, lokasi_gambar from produk inner join gambar on produk.id_produk = gambar.id_produk"];
    ?>
    <center>
        <div class="container">
            <!-- Slider -->
            <div class="slider">SLIDER</div>
            <?php         
                // Loop sesuai kategori
                // Pertama best seller, kemudian sesuai kategori 

                // Best Seller
            ?>
                <div class="item-panel">
                    <h5>Best Seller</h5>
                    <div class="row item-list">
                    <!-- Cetak data berulang 4 -->
                        <?php 
                            $best_seller = mysqli_query($conn,"SELECT produk.id_produk, nama_barang, harga, bahan, warna, best_seller, lokasi_gambar from produk inner join gambar on produk.id_produk = gambar.id_produk order by best_seller desc");
                            $i = 1;
                            while($data = mysqli_fetch_array($best_seller)){
                        ?>
                                <div class="col-sm-3">
                                    <div class="result">
                                        <a href="scripts/detail.php?id-produk=<?php echo $data['id_produk']; ?>" class="anchor-black">
                                            <?php 
                                               $pic = $data["lokasi_gambar"];
                                               echo "<center><img src='$pic' alt='' class='result-img'></center>"; 
                                               echo "<div class='judul'><b>".$data["nama_barang"]."</b><div class='garis'></div>"; 
                                               echo $data["bahan"]." - ".$data["warna"]."</div><br>"; 
                                               echo "<div class='result-cost'>Rp ".number_format($data["harga"], 0, "", ".")."</div>";
                                            ?>
                                        </a>
                                    </div>
                                </div>
                        <?php
                                $i++;
                                if($i > 4){
                                    break;
                                }
                            }
                        ?>
                    </div>
                    <a href="scripts/search.php?kategori=best-seller" class="btn more text-center" name="more">More></a>

                </div>
                
                    <?php
                        $total_urutan = mysqli_query($conn, $query[0]);
                        $data_produk = mysqli_query($conn, $query[1]);
                        $hasil_urutan = mysqli_num_rows($total_urutan);
                        $kategori_arr = [];
                        $id_kategori_arr = [];
                        while($data = mysqli_fetch_array($total_urutan)){
                            array_push($kategori_arr, $data["nama_kategori"]);
                            array_push($id_kategori_arr, $data["id_kategori"]);
                        }
                
                        // Cetak data sesuai kategori
                        for($i=0; $i<$hasil_urutan; $i++){          
                    ?>
                            <div class="item-panel">
                                <h5><?php echo $kategori_arr[$i]; ?></h5>
                                <div class="row item-list">    
                                    <?php
                                        // Filter data sesuai kategori
                                        $id_kategori = $id_kategori_arr[$i];
                                        $filter_data = mysqli_query($conn, "SELECT produk.id_produk, produk.id_kategori, nama_barang, harga, bahan, warna,  best_seller, lokasi_gambar from produk inner join gambar on produk.id_produk = gambar.id_produk where produk.id_kategori='$id_kategori'");
                                        $k = 0;
                                        while($data = mysqli_fetch_array($filter_data)){
                                    ?>
                                            <div class="col-sm-3 col-md-3">
                                                <div class="result">
                                                    <a href="scripts/detail.php?id-produk=<?php echo $data['id_produk']; ?>" class="anchor-black">
                                                        <?php 
                                                            $pic = $data["lokasi_gambar"];
                                                            echo "<center><img src='$pic' alt='' class='result-img'></center>"; 
                                                            echo "<div class='judul'><b>".$data["nama_barang"]."</b><div class='garis'></div>"; 
                                                            echo $data["bahan"]." - ".$data["warna"]."</div><br>"; 
                                                            echo "<div class='result-cost'>Rp ".number_format($data["harga"], 0, "", ".")."</div>";
                                                        ?>
                                                    </a>
                                                </div>
                                            </div>
                                    <?php
                                            $k++;
                                            if($k > 4){
                                                break;
                                            }
                                        }
                                    ?>
                                </div>
                                <a href="scripts/search.php?kategori=<?php echo $id_kategori;?>" class="btn more text-center">More></a>
                            </div>
                        <?php
                        } 
                        ?>
                                    
        </div>
    </center>    
    <?php include "scripts/footer.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>