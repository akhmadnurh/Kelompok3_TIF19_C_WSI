<?php include "sidebar.php" ?>
    <?php require_once "connection.php"; ?>
    <div class="container-fluid">
        <h1 class="my-4">Menunggu Pengiriman</h1>
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
                            $sql = "SELECT * from transaksi inner join user on transaksi.id_user = user.id_user where status='menunggu kirim' order by tanggal_transaksi desc";
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
                                        <a href="#" class="btn btn-dark mb-1" data-toggle="modal" data-target="#no-resi">
                                            Konfirmasi
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
                                                <form action="konfirmasi-pengiriman.php?status=batal&id_transaksi=<?php echo $data['id_transaksi'];  ?>" method="POST">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-dark">Konfirmasi</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- Modal nomor resi -->
                                <div class="modal fade" id="no-resi" tabindex="-1" role="dialog" aria-labelledby="no-resi" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Masukkan Nomor Resi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">      
                                                <div class="form-group">
                                                    <input type="hidden" name="id_produk" id="id_produk" class="form-control" value="<?php echo $id_produk; ?>">
                                                    <label for="resi">No. Resi</label>
                                                    <input type="text" name="resi" id="resi" class="form-control"  maxlength="15" placeholder="Boleh dikosongi jika metode pengiriman COD" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="button" onclick="konfirmasi_pengiriman()" class="btn btn-dark">Konfirmasi</button>
                                            </div>
                                            <script>
                                                function konfirmasi_pengiriman(){
                                                    var resi = document.getElementById("resi").value;
                                                    location.href = "konfirmasi-pengiriman.php?status=konfirmasi&id_transaksi=<?php echo $data["id_transaksi"]; ?>&resi="+resi;
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
                                    echo "<li class='page-item'><a class='page-link' href='menunggu-pengiriman.php?halaman=$previous'>Previous</a></li>";
                                }
                            ?>
                            <?php
                                
                                for($i=1; $i<=$total_halaman; $i++){
                                    if($halaman == $i){
                                        echo "<li class='page-item active'><a class='page-link' href='menunggu-pengiriman.php?halaman=$i'>$i</a></li>";
                                    }else{
                                        echo "<li class='page-item'><a class='page-link' href='menunggu-pengiriman.php?halaman=$i'>$i</a></li>";
                                    }
                                }
                            ?>
                            <?php
                                if($halaman == $total_halaman){
                                    echo "<li class='page-item disabled'><a class='page-link' href='#'>Next</a></li>";
                                }else{
                                    echo "<li class='page-item'><a class='page-link' href='menunggu-pengiriman.php?halaman=$next'>Next</a></li>";
                                }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>