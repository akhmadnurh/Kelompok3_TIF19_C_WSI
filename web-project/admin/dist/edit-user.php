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
        $title = "Edit User";
      }else{
        // Code here
        $title = "Tambah User";
      }

    ?>
    <div class="container" >
      <div class="card" style="margin-top: 100px;">
        <div class="card-header">
          <h1><?php echo $title; ?></h1>
        </div>
        <div class="card-body">
          <div class="input-group mb-3">
            <span class="input-group-text">Email</span>
            <input type="email" class="form-control" placeholder="Masukkan email" maxlength="50" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Password</span>
            <input type="password" class="form-control" placeholder="Masukkan password" maxlength="30">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Ulangi Password</span>
            <input type="password" class="form-control" placeholder="Masukkan password" maxlength="30">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Nama Lengkap</span>
            <input type="text" class="form-control" placeholder="Masukkan nama lengkap" maxlength="50">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Jenis Kelamin</span>
            <select name="select" id="" class="form-select">
                <option value="#">-- Pilih salah satu -- </option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Nomor WA</span>
            <input type="text" class="form-control" placeholder="Masukkan nomor WhatsApp" maxlength="11">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Alamat</span>
            <textarea name="keterangan" id="" cols="30" rows="10" placeholder="Masukkan keterangan produk (boleh dikosongi)" class="form-control"></textarea>
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