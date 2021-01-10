<?php include 'sidebar.php' ?>
    <div class="container-fluid">
        <h1 class="my-4">Dashboard</h1>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Menunggu Pembayaran</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Menunggu Pengiriman</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body">Proses Pengiriman</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-secondary text-white mb-4">
                    <div class="card-body">Tabungan</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-shopping-cart mr-1"></i>
                Transaksi Terakhir
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama</th>
                                <th>No. WA</th>
                                <th>Nama Barang</th>
                                <th>Warna</th>
                                <th>Harga</th>
                                <th>Tgl Transaksi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>0812345678</td>
                                <td>Chayra Abaya</td>
                                <td>Black</td>
                                <td>Rp. 140000</td>
                                <td>20-01-2021</td>
                                <td>Lunas</td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="pagination justify-content-end">
                        <li class="page-item"><a href="#" class="page-link">Selengkapnya</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php' ?>