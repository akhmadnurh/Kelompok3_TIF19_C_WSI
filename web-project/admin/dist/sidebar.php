<?php 
    session_start();
    if(!isset($_SESSION["level"]) or $_SESSION["level"] != "admin"){
        header("Location: ../../index.php");
    }
?>
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
        <!-- Icon Title -->
        <link rel="icon" href="../../images/hi_valeeqa.png">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            #dataTable_info {
                display: none;
            }
            #dataTable_paginate {
                display: none;
            }
            #dataTable_filter {
                display: none;
            }
            #dataTable_length {
                display: none;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">
                <img src="https://raw.githubusercontent.com/monokuro49/Kelompok3_TIF19_C_WSI/master/web-project/images/hi_valeeqa_white.png" alt="Logo Hi Valeeqa" height="20" class="d-inline-block align-center mb-sm-2 mr-2 ml-2" loading="lazy">
                 Hi Valeeqa
            </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">MENU</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <!-- Produk -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
                                <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                                Produk
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseProducts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="data-produk.php">Data Produk</a>
                                    <a class="nav-link" href="kategori.php">Kategori</a>
                                    <a class="nav-link" href="edit-produk.php?status=add">Tambah Produk</a>
                                </nav>
                            </div>

                            <!-- Transaksi -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransaction" aria-expanded="false" aria-controls="collapseTransaction">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Transaksi
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseTransaction" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="menunggu-pembayaran.php">Menunggu Pembayaran</a>
                                    <a class="nav-link" href="menunggu-pengiriman.php">Menunggu Pengiriman</a>
                                    <a class="nav-link" href="proses-pengiriman.php">Proses Pengiriman</a>
                                    <a class="nav-link" href="tabungan.php">Tabungan</a>
                                    <a class="nav-link" href="riwayat-transaksi.php">Riwayat Transaksi</a>
                                </nav>
                            </div>

                            <!-- User Management -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                User Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseUsers" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="user.php">User</a>
                                    <a class="nav-link" href="admin.php">Admin</a>
                                    <a class="nav-link" href="rekening.php">Rekening</a>
                                    <a class="nav-link" href="edit-user.php?status=add">Tambah User</a>
                                    <a class="nav-link" href="lupa-password.php">Lupa Password</a>
                                </nav>
                            </div>

                            <!-- Kembali ke Client Area -->
                            <a class="nav-link" href="../../index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Client Area
                            </a>

                            <!-- Logout -->
                            <a class="nav-link" href="logout.php" onclick="return confirm('Apakah anda yakin ingin Logout?')">
                                <div class="sb-nav-link-icon"><i class="fas fa-power-off"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION["nama"]; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>