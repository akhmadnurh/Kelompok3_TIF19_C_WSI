<?php
    require_once "connection.php";
    $id_produk = $_GET["id_produk"];

    $kategori = $_POST["kategori"];
    $nama_barang = $_POST["nama_barang"];
    $warna = $_POST["warna"];
    $bahan = $_POST["bahan"];
    $harga = $_POST["harga"];
    $panjang = $_POST["panjang"];
    $lebar_dada = $_POST["lebar-dada"];
    $stok = $_POST["stok"];
    $keterangan = $_POST["keterangan"] != "" ? $_POST["keterangan"] : "-";
    $best_seller = $_POST["best-seller"] == "on" ? "1":"0";
    

    if($kategori == "#"){
        header("Location: edit-produk?error=kategori");
    }
    // Foto
    $gambar_tmp = $_FILES["gambar"]["tmp_name"];
    $gambar = $_FILES["gambar"]["name"];
    move_uploaded_file($gambar_tmp, "../".$gambar);

    // Query
    // $status = $_GET["status"];
    // if($status == "edit"){
    //     $sql = "update produk set id_kategori='$kategori', nama_barang='$nama_barang', warna='$warna', bahan='$bahan', harga='$harga', stok='$stok', keterangan='$keterangan', best_seller='$best_seller' where id_produk='$id_produk'";
    //     $sql2 = "update ukuran set panjang=$panjang, lebar_dada=$lebar_dada where id_produk=$id_produk";
    //     // $sql3 = "update gambar set id_kategori=$kategori, "    
    // }elseif($status == "add"){
    //     echo "hehe";
    // }

    //     $query = mysqli_query($conn, $sql);
    //     $query = mysqli_query($conn, $sql2);

    
    //     header("Location: data-produk.php");


?>