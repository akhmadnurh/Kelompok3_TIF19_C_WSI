<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printer List</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- CSS -->
    <style>
        .container .card{
            margin-top: 50px;
            margin-left: 10%;
            margin-right: 10%;
        }
        .col-sm-2, .col-sm-1, .col-sm-4, .col-sm-3{
            border-style: solid;
            border-width: 1px;
        }
        .card{
            border-width:0px;
        }
    </style>
</head>
<body>
    <section>
        <div class="container">
            <div class="card" id="list">
                <!-- Field -->
                <div class="row text-center" >
                    <div class="col-sm-1">No</div>
                    <div class="col-sm-3">Nama Merek</div>
                    <div class="col-sm-2">Warna</div>
                    <div class="col-sm-2">Jumlah</div>
                    <div class="col-sm-3">Action</div>
                </div>
                    <?php

                        require_once("php/koneksi.php");

                        //Query untuk mengambil semua data dari table printer
                        $sql = "select * from printer";
                        $query = $dbh->query($sql);
                        
                        //Menampilkan data secara berulang
                        $no_urut = 1;
                        while($data = $query->fetch()){
                            
                    ?>

                        <!-- Tampilkan data -->
                            <div class="row text-center">
                                <div class="col-sm-1"><?php echo $no_urut; ?></div>
                                <div class="col-sm-3"><p name="merk"><?php echo $data["nama_merek"]; ?></p></div>
                                <div class="col-sm-2"><?php echo $data["warna"]; ?></div>
                                <div class="col-sm-2"><?php echo $data["jumlah"] ?></div>
                                <div class="col-sm-3">
                                    <button class="btn btn-link" name="edit">
                                        <a href="php/tambah.php?no=<?= $data["no"]; ?>" >Edit</a>
                                    </button>
                                    <button class="btn btn-link" name="edit">
                                        <a href="php/hapus.php?no=<?= $data["no"]; ?>">Hapus</a>
                                    </button>
                                </div>
                            </div>
                    <?php $no_urut+=1; }?>

                <!-- Tambah data -->
                <div class="row" style="margin-top:25px;">
                    <div class="md-sm-2 text-right">
                        <a href="php/tambah.php">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>