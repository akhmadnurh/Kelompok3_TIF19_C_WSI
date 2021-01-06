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
        .tabContainer {
            width: 100%;
            height: auto;
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

    </style>
  </head>
  <body>
    <?php include 'nav.php' ?>
    <div class="container marg">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-xl-3">
                <div class="card">
                    <div class="card-header"><h3>Akun</h3></div>
                    <div class="card-body px-0 py-0">
                        <ul class="list-group list-group-flush">
                            <a href="akun.php" class="list-group-item list-group-item-action py-3">Akun Saya</a>
                            <a href="transaksi-history.php" class="list-group-item list-group-item-action active py-3">Histori Transaksi</a>
                          </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-xl-9">
                <div class="card">
                    <div class="card-body py-0 px-0">
                        <div class="tabContainer">
                            <div class="buttonContainer">
                                <button onclick="showPanel(0,'#ffffff')">Menunggu</button>
                                <button onclick="showPanel(1,'#ffffff')">Dikirim</button>
                                <button onclick="showPanel(2,'#ffffff')">Selesai</button>
                            </div>
                            <div class="tabPanel">
                                dd
                            </div>
                            <div class="tabPanel">
                                ww
                            </div>
                            <div class="tabPanel">
                                Review
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>
    <script>
        var tabButttons = document.querySelectorAll(".tabContainer .buttonContainer button");
        var tabPanels = document.querySelectorAll(".tabContainer .tabPanel");

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

        showPanel(0,'#ffffff');
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>