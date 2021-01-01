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
    </style>
  </head>
  <body>
    <?php include 'nav.php' ?>
    <div class="container marg">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xl-4">
                <div class="card">
                    <div class="card-header"><h3>Akun</h3></div>
                    <div class="card-body px-0 py-0">
                        <ul class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action py-3">Akun Saya</a>
                            <a href="#" class="list-group-item list-group-item-action py-3">Histori Transaksi</a>
                          </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-xl-8">
                <div class="card">
                    <div class="card-header"><h3>Informasi Kontak</h3></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                Nama: Ahmad Dayat<br>
                                E-mail: adayat00@gmail.com<br>
                                Tgl Lahir: 01-01-2001<br>
                                Password: ********<br>
                                No, Hp: 081234765809<br>
                            </div>
                            <div class="col-2">
                                <button class="btn btn-outline-dark" type="button">UBAH</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-xl-3">
                    <div class="card-header"><h3>Alamat Pengiriman</h3></div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <input class="form-control mb-3 w-50" type="text" placeholder="Provinsi">
                                <input class="form-control mb-3 w-50" type="text" placeholder="Kabupaten">
                                <input class="form-control mb-3 w-50" type="text" placeholder="Kecamatan">
                                <input class="form-control mb-3" type="text" placeholder="Alamat Lengkap">
                                <input class="form-control mb-3 w-50" type="text" placeholder="Kode Pos">
                                <button class="btn btn-lg btn-dark">Simpan</button>
                            </div>
                        </form>
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