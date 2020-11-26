<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan PHP dan MySQL - Menampilkan data dari Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan MySQL</h1>
        <h2>Menampilkan data dari Database</h2>
    </div>
    <?php
        if(isset($_GET["pesan"])){
            $pesan = $_GET["pesan"];
            if($pesan == "input"){
                echo "Data berhasil diinput";
            }elseif($pesan == "update"){
                echo "Data berhasil diupdate";
            }elseif($pesan == "hapus"){
                echo "Data berhasil dihapus";
            }
        }
    ?>
    <br>
    <a href="input.php" class="tombol">+ Tambah Data Baru</a>
    <h3>Data User</h3>
    <table class="table" border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Pekerjaan</td>
            <td>Opsi</td>
        </tr>
        
            <?php

                include "koneksi.php";
                $query_mysql = mysqli_query($koneksi, "select * from user");
                $nomor = 1;
                while($data = mysqli_fetch_array($query_mysql)){
            ?>  
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data["nama"]; ?></td>
                    <td><?php echo $data["alamat"]; ?></td>
                    <td><?php echo $data["pekerjaan"]; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data["id"] ?>" class="edit">Edit</a>
                        <a href="hapus.php?id=<?php echo $data["id"] ?>" class="hapus">Hapus</a>
                
                    </td>
                </tr>
            <?php
                }

            ?>
        
    
    </table>    
</body>
</html>