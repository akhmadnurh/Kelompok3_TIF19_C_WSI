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
        .item{
            width: 160px;
            height: 240px;
            background: pink;
            margin-bottom: 10px;
            margin-top: 5px;
            
        }
        .item-panel{
            margin-top:50px;
        }
        .item-list{
            margin-left:17%;
            margin-right:17%;
        }
        /*.item-title{*/
        /*    margin-top: 100px;*/
        /*}*/
        .more{
            background: #fff;
            border: #000000 2px solid;
            padding: 8px;
            width: 90px;
            margin-top: 10px;
            margin-bottom: 20px;
        }
    </style>
  </head>
  <body>
    <?php include "scripts/nav.php"; ?>
    <center>
        <div class="container">
            <!-- Slider -->
            <div class="slider">SLIDER</div>
            <!-- Best Seller -->
            <div id="best-seller" class="item-panel">
                <h5>Best Seller</h5>
                <div class="row item-list">
                    <div id="item-1" class="col-sm-3">
                        <div class="item"></div>
                        <a class="item-title">Best Seller 1</a>
                    </div>
                    <div id="item-1" class="col-sm-3">
                        <div class="item"></div>
                        <a class="item-title">Best Seller 2</a>
                    </div>
                    <div id="item-1" class="col-sm-3">
                        <div class="item"></div>
                        <a class="item-title">Best Seller 3</a>
                    </div>
                    <div id="item-1" class="col-sm-3">
                        <div class="item"></div>
                        <a class="item-title">Best Seller 4</a>
                    </div>
                </div>
                <div class="more text-center">More></div>
            </div>
            
            <!-- Yumna Dress -->
            <div id="best-seller" class="item-panel">
                <h5>Yumna Dress</h5>
                <div class="row item-list">
                    <div id="item-1" class="col-sm-3">
                        <div class="item"></div>
                        <a class="item-title">Yumna Dress 1</a>
                    </div>
                    <div id="item-1" class="col-sm-3">
                        <div class="item"></div>
                        <a class="item-title">Yumna Dress 2</a>
                    </div>
                    <div id="item-1" class="col-sm-3">
                        <div class="item"></div>
                        <a class="item-title">Yumna Dress 3</a>
                    </div>
                    <div id="item-1" class="col-sm-3">
                        <div class="item"></div>
                        <a class="item-title">Yumna Dress 4</a>
                    </div>
                </div>
                <div class="more text-center">More></div>
            </div>
            
            <!-- Chayra Abaya -->
            <div id="best-seller" class="item-panel">
                <h5>Chayra Abaya</h5>
                <div class="row item-list">
                    <div id="item-1" class="col-sm-3">
                        <div class="item"></div>
                        <a class="item-title">Chayra Abaya 1</a>
                    </div>
                    <div id="item-1" class="col-sm-3">
                        <div class="item"></div>
                        <a class="item-title">Chayra Abaya 2</a>
                    </div>
                    <div id="item-1" class="col-sm-3">
                        <div class="item"></div>
                        <a class="item-title">Chayra Abaya 3</a>
                    </div>
                    <div id="item-1" class="col-sm-3">
                        <div class="item"></div>
                        <a class="item-title">Chayra Abaya 4</a>
                    </div>
                </div>
                <div class="more text-center">More></div>
            </div>
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
