<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hi Valeeqa</title>
    <style>

        .filter-title{
            background: #FBF1F0;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-bottom: 5px;
        }
        .filter-position{
            margin-left: 100%:
        }
        .filter-content{
            border: 1px solid grey;
            padding: 5%;
        }
        .size-box {
            border: 0.5px solid black;
            padding: 2%;
            margin-left: 3%;
            margin-right: 3%;
            height: 30px;
            width: 30px;
        }
        .result{
            width: 200px;
            border: 1px solid black;
            padding: 5px; 
            margin-bottom: 20px;
        }
        .result-img{
            width: 100%;
            height: 200px;
            background: pink;   

        }
        .result-cost{
            background: pink;
        }
        body .container{
            margin-bottom: 70px;
        }
    </style>
  </head>
  <body>
    <?php include "nav.php";  ?>
    <div class="container">
        <div class="row" style="margin-top: 150px;">
            <!-- Filter -->
            <div class="col-sm-3">
                <div class="text-center filter-title">
                    Filter
                </div>
                <div class="filter-content">
                    <div class="category">
                        <label for="">Kategori</label>  <br>
                        <div class="filter-position">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="kategori" value="Chayra Abaya" id="kategori1">
                                <label for="kategori" class="form-check-label">Chayra Abaya</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="kategori" value="Yumna Dress" id="kategori2">
                                <label for="kategori" class="form-check-label">Yumna Dress</label>
                            </div>
                        </div>
                        <hr>
                        <label for="">Warna</label>
                        <div class="filter-position">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="warna" value="Milo" id="milo">
                                <label for="kategori" class="form-check-label">Milo</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="warna" value="Dusty Peach" id="dusty-peach">
                                <label for="kategori" class="form-check-label">Dusty Peach</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="warna" value="Dark Army" id="dark-army">
                                <label for="kategori" class="form-check-label">Dark Army</label>
                            </div>
                        </div>
                        <hr>
                        <label for="">Harga</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Harga minimum">
                            <input type="text" class="form-control" placeholder="Harga maximum" style="margin-top: 2%">
                        </div>
                        <hr>
                        <label for="">Ukuran</label>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="size-box">XS</div> 
                            </div>
                            <div class="col-sm-3">
                                <div class="size-box">S</div> 
                            </div>
                            <div class="col-sm-3">
                                <div class="size-box">M</div> 
                            </div>
                            <div class="col-sm-3">
                                <div class="size-box">L</div> 
                            </div>
                            <div class="col-sm-3">
                                <div class="size-box">XL</div> 
                            </div>
                            <div class="col-sm-3">
                                <div class="size-box">XXL</div> 
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary" style="width:100%; background: #C3A892; border: #C3A892;  ">Terapkan</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hasil Pencarian -->
            <div class="col-sm-9">
                <p>Menampilkan hasil pencarian untuk "Yumna Dress"</p>
                <br>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="result">
                            <div class="result-img">Gambar</div>
                            <p>Yumna Dress</p>
                            <p>Wolfpeach Exclusive - Milo</p>
                            <div class="result-cost">
                                Rp 177.000
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="result">
                            <div class="result-img">Gambar</div>
                            <p>Yumna Dress</p>
                            <p>Wolfpeach Exclusive - Milo</p>
                            <div class="result-cost">
                                Rp 177.000
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="result">
                            <div class="result-img">Gambar</div>
                            <p>Yumna Dress</p>
                            <p>Wolfpeach Exclusive - Milo</p>
                            <div class="result-cost">
                                Rp 177.000
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="result">
                            <div class="result-img">Gambar</div>
                            <p>Yumna Dress</p>
                            <p>Wolfpeach Exclusive - Milo</p>
                            <div class="result-cost">
                                Rp 177.000
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="result">
                            <div class="result-img">Gambar</div>
                            <p>Yumna Dress</p>
                            <p>Wolfpeach Exclusive - Milo</p>
                            <div class="result-cost">
                                Rp 177.000
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="result">
                            <div class="result-img">Gambar</div>
                            <p>Yumna Dress</p>
                            <p>Wolfpeach Exclusive - Milo</p>
                            <div class="result-cost">
                                Rp 177.000
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Hasil Pencarian -->
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <?php include "footer.php";  ?>
  </body>
</html>