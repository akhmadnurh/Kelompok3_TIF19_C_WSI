<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="cart.js" async></script>
    <style>
        .marg {
            margin-top: 10rem !important;
        }
        .item-produk {
            padding-bottom: 20px;
            margin-bottom: 30px;
            border-bottom: 1px solid #eeeeee;
        }
        .item-harga {
            font-size: 20px;
            font-weight: bold;
        }
        .item-judul {
            font-size: 25px;
            font-weight: bold;
        }
    </style>
  </head>
  <body>
    <?php include 'nav.php' ?>

    <div class="container mb-5 marg">
        <div class="row">
            <!-- Grid Item -->
            <div class="col-lg-8">
                
                <div class="card">
                    <div class="card-header"><h3>Keranjang</h3></div>
                    <div class="card-body px-4 item-body">
                        <div class="row item-produk">
                            <div class="col-md-4 col-lg-2 col-xl-2">
                                <img src="https://raw.githubusercontent.com/monokuro49/Kelompok3_TIF19_C_WSI/master/web-project/images/detail/img4.png" alt="contoh" class="w-100">
                            </div>
                            <div class="col-md-6 col-lg-8 col-xl-8">
                                <span class="item-judul">Chayra Abaya</span><br>
                                <span class="item-warna">Black</span><br><br>
                                <input type="number" value="1" class="form-control w-25 mt-auto text-center item-input">
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <button class="btn btn-danger" type="button">Hapus</button>
                            </div>
                            <div class="ml-auto mr-4">
                                <span class="item-harga">Rp. 150000</span>
                            </div>
                        </div>
                        <div class="row item-produk">
                            <div class="col-md-4 col-lg-2 col-xl-2">
                                <img src="https://raw.githubusercontent.com/monokuro49/Kelompok3_TIF19_C_WSI/master/web-project/images/detail/img2.png" alt="contoh" class="w-100">
                            </div>
                            <div class="col-md-6 col-lg-8 col-xl-8">
                                <span class="item-judul">Chayra Abaya</span><br>
                                <span class="item-warna">Black</span><br><br>
                                <input type="number" value="1" class="form-control w-25 mt-auto text-center item-input">
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <button class="btn btn-danger" type="button">Hapus</button>
                            </div>
                            <div class="ml-auto mr-4">
                                <span class="item-harga">Rp. 150000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Grid Total -->
            <div class="col-lg-4">
                
                <div class="card">
                    <div class="card-header text-center"><h3>Total</h3></div>
                    <div class="card-body">
                        <table class="table justify-content-between">
                            <tr>
                                <td>Total</td>
                                <td><span class="item-total">Rp. 300000</span></td>
                            </tr>
                        </table>
                        <center><a href="#" class="btn btn-dark btn-lg">Checkout</a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>