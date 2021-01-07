<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hi Valeeqa - Admin</title>
  </head>
  <body>
    <?php
      include "sidebar.php";
      require_once "connection.php";
      $sql = "select * from kategori";
      $query = mysqli_query($conn, $sql);
      $kat = [];
      $id_kat = [];
      while($data = mysqli_fetch_array($query)){
        array_push($kat, $data["nama_kategori"]);
        array_push($id_kat, $data["id_kategori"]);
      }
      if($_GET["status"] == "edit"){
        // Code here
        $title = "Edit Produk";

        $id_produk = $_GET["id_produk"];
        $sql = "select * from produk where id_produk='$id_produk'";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($query);

        $id_kategori = $data["id_kategori"];
        $nama_barang = $data["nama_barang"];
        $warna = $data["warna"];
        $bahan = $data["bahan"];
        $harga = $data["harga"];
        $stok = $data["stok"];
        $keterangan = $data["keterangan"];
        $best_seller = $data["best_seller"];

        
      }else{
        // Code here
        $title = "Tambah Produk";

        $id_kategori = "";
        $nama_barang = "";
        $warna = "";
        $bahan = "";
        $harga = "";
        $stok = "";
        $keterangan = "";
        $best_seller = "";
      }
      
    ?>
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h1><?php echo $title; ?></h1>
        </div>
        <div class="card-body">
          <form action="edit-produk-process.php" method="POST">
            <div class="input-group mb-3">
              <span class="input-group-text">Kategori</span>
              <select name="kategori" id="" class="form-select" required>
                <option value="#">-- Masukkan kategori produk --</option>
                <?php
                  for($i=0; $i<count($id_kat); $i++){
                    $selected = $id_kategori != "" ? "selected": "";
                    echo "<option value='$id_kat[$i]' $selected>$kat[$i]</option>";
                  }
                ?>
              </select>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Nama Produk</span>
              <input type="text" class="form-control" placeholder="Masukkan nama produk" maxlength="70" value="<?php echo $nama_barang; ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Warna</span>
              <input type="text" class="form-control" placeholder="Masukkan warna" maxlength="30" value="<?php echo $warna; ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Bahan</span>
              <input type="text" class="form-control" placeholder="Masukkan bahan pakaian" maxlength="30" value="<?php echo $bahan; ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Harga</span>
              <input type="number" class="form-control" placeholder="Masukkan harga/pcs" maxlength="8" value="<?php echo $harga; ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Stok</span>
              <input type="text" class="form-control" placeholder="Masukkan stok produk" maxlength="11" value="<?php echo $stok; ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Keterangan</span>
              <textarea name="keterangan" id="" cols="30" rows="10" placeholder="Masukkan keterangan produk (boleh dikosongi)" class="form-control"><?php echo $keterangan; ?></textarea>
            </div>
            <div class="input-group mb-3 ml-4">
              <div class="form-check form-switch">
                <input type="checkbox" class="form-check-input" id="best-seller" <?php if($best_seller == 1) echo "checked"; ?>>
                <label for="best-seller" class="form-check-label" >Best Seller</label>
              </div>
            </div>
            <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Masukkan Foto</label>
              <input class="form-control" type="file" id="formFileMultiple">
            </div>
            <button class="btn btn-dark" type="submit" style="width: 100%;">Submit</button>
          </form> 
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>