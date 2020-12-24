<!doctype html>
<html lang="en">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .nav-item {
            margin-left: 10px;
        }
        .brand-icon{
            height: 30px;
            float:left;
            margin-right:10px;
        }
        .bg-navbar{
            background: #FBF1F0;
        }
        .navbar-2{
            background: #FBF1F0;
        }
        .a{
            margin-top: 72px;
        }
        nav form button.btn{
            background: #FBF1F0;
            border: 2px #fbf1f0 solid;
            margin-bottom: 5px;
            margin-left: 3px;
            height: 40px;
            width: 50px;
            padding: 2px;
        }
        nav form button.btn:hover {
            background: #ffffff;
            border: #fbf1f0 solid 2px;
        }
        nav form input.form-control-inline{
            width: 30em;
            padding: 5px;
            border: 2px solid #fbf1f0;
            margin-bottom: 4px;
        }
        .navbar + .navbar {
            z-index: 1029;
        }
        .search-icon {
            height: 14px;
            width: auto;
        }
        .menu-icon {
            height: 30px;
            width: auto;
        }
        .dropdown {
            margin-right: 0px;
        }
        .contain {
            width:100%;
            padding-right:var(--bs-gutter-x,.75rem);
            padding-left:var(--bs-gutter-x,.75rem);
            margin-right:auto;
            margin-left:auto;
        }
        @media (min-width:576px) {
            .contain{max-width:540px}
        }
        @media (min-width:768px) {
            .contain{max-width:720px}
        }
        @media (min-width:992px) {
            .contain{max-width:960px}
        }
        @media (min-width:1200px) {
            .contain{max-width:1140px}
        }
        @media (min-width:1400px) {
            .contain{max-width:1320px}
        }
        .navbar>.contain,.navbar>.container-fluid,.navbar>.container-lg,.navbar>.container-md,.navbar>.container-sm,.navbar>.container-xl,.navbar>.container-xxl {
            display:flex;
            flex-wrap:inherit;
            align-items:center;
            justify-content:space-between
        }
    </style>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: white">
            <div class="contain">
                <a href="#" class="navbar-brand">
                    <div class="brand">
                        <img src="https://raw.githubusercontent.com/monokuro49/Kelompok3_TIF19_C_WSI/master/web-project/images/hi_valeeqa.png" alt="Brand Icon" class="brand-icon">
                        <h2>Hi Valeeqa</h2>
                    </div>
                </a>
                <form action="" class="form-inline my-2 my-lg-0" >
                    <input type="search" class="form-control-inline" name="search">
                    <button class="btn" type="submit"><img src="https://raw.githubusercontent.com/monokuro49/Kelompok3_TIF19_C_WSI/master/web-project/images/hivaleeqa_search.png" alt="search" class="search-icon"></button>
                </form>
                <div class="dropdown">
                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://raw.githubusercontent.com/monokuro49/Kelompok3_TIF19_C_WSI/master/web-project/images/hivaleeqa_person.png" alt="Account" class="menu-icon" >
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Registrasi</a>
                        <a class="dropdown-item" href="#">Login</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Tabungan</a>
                        <a class="dropdown-item" href="#">Akun Saya</a>
                    </div>
                </div>
                <a href="#"><img src="https://raw.githubusercontent.com/monokuro49/Kelompok3_TIF19_C_WSI/master/web-project/images/hivaleeqa_bagshop.png" alt="Cart" class="menu-icon"></a>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-navbar fixed-top a">
            <div class="container-fluid">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Terbaru</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Yumna Dress</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Chayra Abaya</a>
                    </li>
                </ul>
            </div>
        </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>