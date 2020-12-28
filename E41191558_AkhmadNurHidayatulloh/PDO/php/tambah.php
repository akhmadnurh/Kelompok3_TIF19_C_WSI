<?php
    // Jika key edit telah di set, maka form akan diisi sesuai data mana yang akan diedit
    if(isset($_GET["no"])){
        // EDIT DATA
        require_once("koneksi.php");
        $no = $_GET["no"];
        $sql = "select * from printer where no='$no'";
        $query = $dbh->query($sql);
        while($data = $query->fetch()){
            $nama_merk = $data["nama_merek"];
            $warna = $data["warna"];
            $jumlah = $data["jumlah"];
        }
        
    }else{
        // TAMBAH DATA
        $nama_merk = "";
        $warna = "";
        $jumlah = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Printer</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        .container .card{  
            margin-top: 50px;
            margin-left: auto;
            margin-right:   auto;
        }
        .row{
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <section>
        <div class="container">
            <div class="card text-center">
                <div class="form-group">
                    <form action="simpan.php" method="post">
                        <div class="row" style="margin-bottom:30px; margin-top:20px;">
                            <div class="col-sm-12">
                                <h2>Tambah Data Barang</h2>
                            </div>
                        </div>

                        <!-- Tampilkan Nomor jika mengedit data -->
                        <?php
                            if(isset($_GET["no"])){?>
                            
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="no">No</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="no" id="no" class="form-control" maxlength="11" value="<?= $no; ?>" readonly>
                                    </div>
                                </div>
                            

                        <?php } ?>
                            
                        <!-- Form -->
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="merk">Nama Merek</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="merk" id="merk" class="form-control" maxlength="20" value="<?= $nama_merk; ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="warna">Warna</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="warna" id="warna" class="form-control" maxlength="10" value="<?= $warna; ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="jumlah">Jumlah</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" name="jumlah" id="jumlah" class="form-control" maxlength="10" value="<?= $jumlah; ?>" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top:50px; margin-bottom:30px;">
                            <div class="col-sm-3">
                                <a href="../index.php">Kembali</a>
                            </div>
                            <div class="col-sm-6 text-right">
                                <button type="button" class="btn btn-warning" onclick="ulang()">Ulangi</button>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="../js/ulang.js"></script>
</body>
</html>