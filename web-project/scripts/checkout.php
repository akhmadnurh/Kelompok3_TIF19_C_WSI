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
                        <tr>
                            <td>Nama</td>
                            <td>aku</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>aku@gmail.com</td>
                        </tr>
                        <tr>
                            <td>No. Hp</td>
                            <td>08123456789</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>Jember</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h3>Rincian Pesanan (2)</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th colspan="3">Pesanan 1</th>
                            </tr>
                        </thead>
                        <tr>
                            <td rowspan="4" width="20%"><img src="https://raw.githubusercontent.com/monokuro49/Kelompok3_TIF19_C_WSI/master/web-project/images/detail/img1.png" class="w-100"></td>
                            <td>Nama Barang</td>
                            <td>Chayra Abaya</td>
                        </tr>
                        <tr>
                            <td>Warna</td>
                            <td>Black</td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>Rp. 140000</td>
                        </tr>
                    </table>

                    <table class="table table-bordered mt-2">
                        <thead class="thead-dark">
                            <tr>
                                <th colspan="3">Pesanan 2</th>
                            </tr>
                        </thead>
                        <tr>
                            <td rowspan="4" width="20%"><img src="https://raw.githubusercontent.com/monokuro49/Kelompok3_TIF19_C_WSI/master/web-project/images/detail/img2.png" class="w-100"></td>
                            <td>Nama Barang</td>
                            <td>Chayra Abaya 2</td>
                        </tr>
                        <tr>
                            <td>Warna</td>
                            <td>Black</td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>Rp. 140000</td>
                        </tr>
                    </table>

                    <table class="table mt-2">
                        <tr class="table-secondary">
                            <td>Total</td>
                            <td>Rp. 320000</td>
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