<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hi Valeeqa - Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            .bg-hivaleeqa{
                background: #FBF1F0;
            }
            .mtop {
                margin-top: 70px;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-hivaleeqa">
        <button class="btn btn-link btn-sm order-1 order-lg-0 ml-3" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <a class="navbar-brand h2 mb-0 ml-2" href="http://localhost/Kelompok3_TIF19_C_WSI/web-project/index.php"><img src="https://raw.githubusercontent.com/monokuro49/Kelompok3_TIF19_C_WSI/master/web-project/images/hi_valeeqa.png" width="auto" height="30" class="d-inline-block align-top" alt="Logo Hi Valeeqa"> Hi Valeeqa</a>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <!-- Produk -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#produk" aria-expanded="false" aria-controls="produk">
                                <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                                Produk
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="produk" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="data-produk.php">Data Produk</a>
                                    <a class="nav-link" href="kategori.php">Kategori</a>
                                    <a class="nav-link" href="edit-produk.php">Tambah Produk</a>
                                </nav>
                            </div>
                            <!-- Transaksi -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transaksi" aria-expanded="false" aria-controls="transaksi">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Transaksi
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="transaksi" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Menunggu Pembayaran</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Tabungan</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Menunggu Pengiriman</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Riwayat Transaksi</a>
                                </nav>
                            </div>
                            <!-- User Management -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user-management" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                User Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="user-management" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="user.php">User</a>
                                    <a class="nav-link" href="admin.php">Admin</a>
                                    <a class="nav-link" href="edit-user.php?status=add">Tambah User</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-power-off"></i></div>
                                Logout
                            </a>  
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Username
                    </div>
                </nav>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
