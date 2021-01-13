<?php include "sidebar.php" ?>
    <?php require_once "connection.php"; ?>
    <div class="container-fluid">
        <h1 class="my-4">Tabungan</h1>
        <!-- Table -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Tanggal Transaksi</th>
                                <th>Nama Pembeli</th>
                                <th>Alamat</th>
                                <th>Nomor WA</th>
                                <th>Jenis Pembayaran</th>
                                <th>Jenis Pengiriman</th>
                                <th>Tabungan</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <?php
                            // Query
                            $sql = "SELECT * from transaksi inner join user on transaksi.id_user = user.id_user where jenis_pembayaran='tabungan' and status='belum bayar' order by tanggal_transaksi desc";
                            $query = mysqli_query($conn, $sql);
                            
                            
                            // Pagination
                            $batas = 10;
                            $halaman = isset($_GET["halaman"]) ? $_GET["halaman"]: 1;
                            $halaman_awal = $halaman>1 ? ($halaman * $batas) - $batas : 0;// Untuk tiap nomor
                            
                            $next = $halaman + 1;
                            $previous = $halaman - 1;

                            $total_data = mysqli_num_rows($query);
                            $total_halaman = ceil($total_data / $batas);
                            $nomor = $halaman_awal + 1;
                            // Query data sesuai halaman
                            $sql = $sql." LIMIT $halaman_awal, $batas";
                            $query = mysqli_query($conn, $sql);
                            while($data = mysqli_fetch_array($query)){
                        ?>      
                                <tr>
                                    <td><?php echo $nomor; ?></td>
                                    <td><?php echo $data["tanggal_transaksi"]; ?></td>
                                    <td><?php echo $data["nama"]; ?></td>
                                    <td><?php echo $data["alamat"]; ?></td>
                                    <td><?php echo $data["nomor_wa"]; ?></td>
                                    <td><?php echo $data["jenis_pembayaran"]; ?></td>
                                    <td><?php echo $data["jenis_pengiriman"]; ?></td>
                                    <td><?php echo $data["tabungan"]; ?></td>
                                    <td><?php echo $data["total"]; ?></td>
                                    <td><?php echo $data["status"]; ?></td>
                                    <td>
                                        <a href="#" class="btn btn-dark mb-1" data-toggle="modal" data-target="#tabungan">
                                            Tambah
                                        </a>
                                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#batal">
                                            Batalkan
                                        </a>
                                        

                                    </td>
                                </tr> 
                                <!-- Modal batal -->
                                <div class="modal fade" id="batal" tabindex="-1" role="dialog" aria-labelledby="batal" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Batalkan Transaksi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">      
                                                <div class="form-group">
                                                    <span>Apakah anda yakin ingin membatalkannya??</span>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <button type="button" onclick="batal_pembayaran()" class="btn btn-dark">Konfirmasi</button>
                                            </div>
                                            <script>
                                                function batal_pembayaran(){
                                                    location.href = "konfirmasi-tabungan.php?status=batal&id_transaksi=<?php echo $data['id_transaksi'];?>";
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div> 
                                <!-- Modal Konfirmasi pembayaran -->
                                <div class="modal fade" id="tabungan" tabindex="-1" role="dialog" aria-labelledby="tabungan" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Pembayaran</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">      
                                                <div class="form-group">
                                                    <span>Tabungan awal: Rp <?php echo number_format($data["tabungan"], 0, "", "."); ?></span><br>
                                                    <label for="tabungan_tambah">Tambah tabungan</label>
                                                    <input type="number" class="form-control" name="tabungan_tambah" id="tabungan_tambah">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="button" onclick="konfirmasi_tabungan()" class="btn btn-dark">Konfirmasi</button>
                                            </div>
                                            <script>
                                                function konfirmasi_tabungan(){
                                                    var tabungan_awal = parseInt('<?php echo $data["tabungan"]; ?>');
                                                    var total = parseInt('<?php echo $data["total"]; ?>');
                                                    var tabungan_tambah = parseInt(document.getElementById("tabungan_tambah").value);
                                                    var hasil = parseInt(tabungan_awal + tabungan_tambah);
                                                    var status;
                                                    if(hasil >= total){
                                                        status = "menunggu kirim";
                                                    }else{
                                                        status = "belum bayar";
                                                    }
                                                    location.href = "konfirmasi-tabungan.php?status=konfirmasi&id_transaksi=<?php echo $data["id_transaksi"]; ?>&dbstatus="+status+"&tabungan="+hasil;
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                        <?php
                                $nomor++;
                            }
                        ?>
                    </table>

                    <!-- Pagination -->
                    <nav>
                        <ul class="pagination justify-content-end">
                            <?php
                                if($halaman == 1){
                                    echo "<li class='page-item disabled'><a class='page-link' href='#'>Previous</a></li>";
                                }else{
                                    echo "<li class='page-item'><a class='page-link' href='tabungan.php?halaman=$previous'>Previous</a></li>";
                                }
                            ?>
                            <?php
                                
                                for($i=1; $i<=$total_halaman; $i++){
                                    if($halaman == $i){
                                        echo "<li class='page-item active'><a class='page-link' href='tabungan.php?halaman=$i'>$i</a></li>";
                                    }else{
                                        echo "<li class='page-item'><a class='page-link' href='tabungan.php?halaman=$i'>$i</a></li>";
                                    }
                                }
                            ?>
                            <?php
                                if($halaman == $total_halaman){
                                    echo "<li class='page-item disabled'><a class='page-link' href='#'>Next</a></li>";
                                }else{
                                    echo "<li class='page-item'><a class='page-link' href='tabungan.php?halaman=$next'>Next</a></li>";
                                }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>