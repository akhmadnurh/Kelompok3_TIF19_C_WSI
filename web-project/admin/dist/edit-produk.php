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
      if(isset($_GET["status"]) or $_GET["status"] == "edit"){
        // Code here
        $title = "Edit Produk";
      }else{
        // Code here
        $title = "Tambah Produk";
      }

    ?>
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h1><?php echo $title; ?></h1>
        </div>
        <div class="card-body">
          <div class="input-group mb-3">
            <span class="input-group-text">Kategori</span>
            <select name="kategori" id="" class="form-select" required>
              <option value="aaa">-- Masukkan kategori produk --</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Nama Produk</span>
            <input type="text" class="form-control" placeholder="Masukkan nama produk" maxlength="70" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Warna</span>
            <input type="text" class="form-control" placeholder="Masukkan warna" maxlength="30" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Bahan</span>
            <input type="text" class="form-control" placeholder="Masukkan bahan pakaian" maxlength="30" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Harga</span>
            <input type="number" class="form-control" placeholder="Masukkan harga/pcs" maxlength="8" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Stok</span>
            <input type="text" class="form-control" placeholder="Masukkan stok produk" maxlength="11" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Keterangan</span>
            <textarea name="keterangan" id="" cols="30" rows="10" placeholder="Masukkan keterangan produk (boleh dikosongi)" class="form-control"></textarea>
          </div>
          <div class="input-group mb-3 ml-4">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="best-seller">
              <label for="best-seller" class="form-check-label">Best Seller</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Masukkan Foto</label>
            <input class="form-control" type="file" id="formFileMultiple">
          </div>
          <button class="btn btn-dark" type="submit" style="width: 100%;">Submit</button>
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