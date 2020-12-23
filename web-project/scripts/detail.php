<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        .container {
            margin-top: 30px;
            margin-bottom: 30px;
            padding: 5px;
        }
        .row {
            margin-top: 5px;
            margin-bottom: 5px;
            
        }
        .col-sm-1 {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: right;
        }
        .col-sm {
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 5px;
        }
        .img-pilih {
            width: 50px;
            height: 75px;
        }
        .img-detail {
            width: 320px;
            height: 480px;
        }
        .judul {
            font-size: 36px;
            font-weight: bold;
        }
        .warna {
            font-size: 18px;
            line-height: 0px;
        }
        .harga {
            font-size: 30px;
            font-weight: bold;
            line-height: 100px;
        }
        .btn-detail {
            font-size: 20px;
            text-align: center;
            background: #000000;
            border: 2px solid #000000;
            color: #ffffff;
            width: 270px;
            height: 70px;
            margin: 10px;
            transition: 0.3s;
            box-sizing: border-box;
            text-align: center;
            vertical-align: middle;
            line-height: 70px;
        }
        .btn-detail:hover {
            background: #f6f6f6;
            color: #000000;
            border: none;
            border: 2px solid #000000;
            text-decoration: none;
        }
        .detail-kanan {
            padding: 5px;
            width: 200px;
            height: 290px;
            border: 2px hsl(0, 0%, 0%) solid;
            margin: 10px;
            overflow: hidden;
        }
        .detail-kanan .judul-info {
            border-bottom: 2px solid #000000;
            padding: 5px;
            margin: 2px;
        }
        .detail-kanan .isi-info {
            margin: 5px;
            font-size: 12px;
            text-align: justify;
        }
        .container .row .col-sm-1 .tabImg button {
            height: 82px;
            width: 57px;
            cursor: pointer;
            outline: none;
            border: none;
            padding: 0px;
            margin-bottom: 5px;
        }
        .container .row .col-sm .panelImg {
            display: none;
            padding: 0px;
            margin: 0px;
        }


        .tabContainer {
            width: 80%;
            height: auto;
            margin-left: 10%;
            margin-right: 10%;
            margin-bottom: 10%;
        }
        .tabContainer .buttonContainer {
            height: 15%;
        }
        .tabContainer .buttonContainer button {
            width: calc(100% / 3);
            height: 100%;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 10px;
            font-size: 16px;
            background-color: #ffffff;
            text-transform: uppercase;
            font-weight: bold;
            color: #dfdfdf;
        }
        .tabContainer .tabPanel {
            height: 85%;
            background-color: #f6f6f6;
            color: #000000;
            text-align: center;
            padding-top: 105px;
            padding-bottom: 50px;
            box-sizing: border-box;
            font-size: 16px;
            display: none;
        }

        .tb-rincian {
            margin-left: 5%;
            text-align: left;
        }
        .tb-rincian td {
            padding: 5px 150px 15px 5px;
        }
        .tb-ukuran {
            margin-left: 5%;
        }
        .tb-ukuran td {
            padding: 15px;
            border: 2px solid black;
        }
    </style>
  </head>
  <body>
  <?php include "scripts/nav.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-1">
                <div class="tabImg">
                    <button onclick="viewPanel(0)"><img src="https://github.com/monokuro49/Kelompok3_TIF19_C_WSI/blob/master/web-project/images/detail/img1.png" class="img-pilih"></button>
                    <button onclick="viewPanel(1)"><img src="https://github.com/monokuro49/Kelompok3_TIF19_C_WSI/blob/master/web-project/images/detail/img2.png" class="img-pilih"></button>
                    <button onclick="viewPanel(2)"><img src="https://github.com/monokuro49/Kelompok3_TIF19_C_WSI/blob/master/web-project/images/detail/img3.png" class="img-pilih"></button>
                    <button onclick="viewPanel(3)"><img src="https://github.com/monokuro49/Kelompok3_TIF19_C_WSI/blob/master/web-project/images/detail/img4.png" class="img-pilih"></button>
                </div>
            </div>
            <div class="col-sm">
                <div class="panelImg"><center><img src="https://github.com/monokuro49/Kelompok3_TIF19_C_WSI/blob/master/web-project/images/detail/img1.png" class="img-detail"></center></div>
                <div class="panelImg"><center><img src="https://github.com/monokuro49/Kelompok3_TIF19_C_WSI/blob/master/web-project/images/detail/img2.png" class="img-detail"></center></div>
                <div class="panelImg"><center><img src="https://github.com/monokuro49/Kelompok3_TIF19_C_WSI/blob/master/web-project/images/detail/img3.png" class="img-detail"></center></div>
                <div class="panelImg"><center><img src="https://github.com/monokuro49/Kelompok3_TIF19_C_WSI/blob/master/web-project/images/detail/img4.png" class="img-detail"></center></div>
            </div>
            <div class="col-sm">
                <p class="judul">Chayra Abaya</p>
                <p class="warna">Black</p>
                <p class="harga">Rp. 177.000</p>
                <a href=""><div class="btn-detail">PESAN</div></a>
                <a href=""><div class="btn-detail">NABUNG</div></a>
            </div>
            <div class="col-sm-auto">
                <div class="detail-kanan">
                    <div class="judul-info"><img src="https://github.com/monokuro49/Kelompok3_TIF19_C_WSI/blob/master/web-project/images/info.png" alt="Info" style="height: 20px;width: auto;margin-right: 5px;"> Tentang Produk Ini</div>
                    <!-- Isi Info Maksimal 380 Karakter -->
                    <div class="isi-info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt consequuntur, fugit neque quos quas voluptas quisquam! Reiciendis laudantium consequuntur dicta quos dolor, cum, sunt quisquam magnam eius voluptates voluptatum adipisci. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non qui dolores consectetur impedit praesentium cum amet quia quam facere, saepe veleed</div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="tabContainer">
        <div class="buttonContainer">
            <button onclick="showPanel(0,'#ffffff')">Rincian</button>
            <button onclick="showPanel(1,'#ffffff')">Detail Ukuran</button>
            <button onclick="showPanel(2,'#ffffff')">Ulasan</button>
        </div>
        <div class="tabPanel">
            <table class="tb-rincian">
                <tr>
                    <td>SKU</td>
                    <td>0DD15AA8BC1BBEGS</td>
                </tr>
                <tr>
                    <td>Warna</td>
                    <td>Black</td>
                </tr>
            </table>
        </div>
        <div class="tabPanel">
            <table class="tb-ukuran">
                <tr>
                    <td>SIZE</td>
                    <td>Lingkar Dada (cm)</td>
                    <td>Lingkar Pinggang (cm)</td>
                    <td>Panjang (cm)</td>
                </tr>
                <tr>
                    <td>S</td>
                    <td>86</td>
                    <td>74</td>
                    <td>137</td>
                </tr>
                <tr>
                    <td>M</td>
                    <td>91</td>
                    <td>79</td>
                    <td>137</td>
                </tr>
                <tr>
                    <td>L</td>
                    <td>96</td>
                    <td>84</td>
                    <td>183</td>
                </tr>
            </table>
        </div>
        <div class="tabPanel">Review</div>
    </div>
    <?php include "scripts/footer.php"; ?>

    <script>
        var tabButttons = document.querySelectorAll(".tabContainer .buttonContainer button");
        var tabPanels = document.querySelectorAll(".tabContainer .tabPanel");
        var tabImgs = document.querySelectorAll(".container .row .col-sm-1 .tabImg button");
        var panelImgs = document.querySelectorAll(".container .row .col-sm .panelImg");

        function showPanel(panelIndex,colorCode) {
            tabButttons.forEach(function(node) {
                node.style.backgroundColor="";
                node.style.color="";
                node.style.borderBottom="";
            });
            tabButttons[panelIndex].style.backgroundColor=colorCode;
            tabButttons[panelIndex].style.color="black";
            tabButttons[panelIndex].style.borderBottom="thick solid black";
            tabPanels.forEach(function(node) {
                node.style.display="none";
            });
            tabPanels[panelIndex].style.display="block";
        }

        function viewPanel(Index) {
            tabImgs.forEach(function(item) {
                item.style.border="";
            });
            tabImgs[Index].style.border="solid medium black";
            panelImgs.forEach(function(item) {
                item.style.display="none";
            });
            panelImgs[Index].style.display="block";
        }

        viewPanel(0);
        showPanel(0,'#ffffff');
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

