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
      if($_GET["status"] == "edit"){
        // Code here
        $title = "Edit User";
        $id_user = $_GET["id_user"];
        $sql = "SELECT * FROM user where id_user=$id_user";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($query);

        $email = $data["email"];
        $pass = $data["pass"];
        $nama = $data["nama"];
        $gender = $data["jenis_kelamin"];
        $wa = $data["nomor_wa"];
        $alamat = $data["alamat"];
        $level = $data["level"];
      }else{
        // Code here
        $title = "Tambah User";

        $id_user = "";
        $email = "";
        $pass = "";
        $nama = "";
        $gender = "";
        $wa = "";
        $alamat = "";
        $level = "";
      }
      $status = $_GET["status"];
    ?>
    <div class="container">
      <div class="card" style="margin-top: 100px;">
        <div class="card-header">
          <h1><?php echo $title; ?></h1>
        </div>
        <div class="card-body">
          <?php
            if(isset($_GET["error"])){
              $status = $_GET["error"];
              if($status == "error-password"){
          ?>
                <div class="alert alert-warning" role="alert">
                  Password tidak sesuai! Ulangi lagi.
                </div>
          <?php
              }elseif($status == "error-gender") {
          ?>
                <div class="alert alert-danger" role="alert">
                  Jenis kelamin belum dimasukkan!
                </div>
          <?php
              }elseif($status == "error-level") {
          ?>
                <div class="alert alert-danger" role="alert">
                  Jenis level akses belum dimasukkan!
                </div>
          <?php
              }
               
            }
          ?>
          <form action="edit-user-process.php?status=<?php echo $status; if($id_user != "") echo "&id_user=".$id_user; ?>" method="POST">
            <div class="input-group mb-3">
              <span class="input-group-text">Email</span>
              <input type="email" name="email" class="form-control" placeholder="Masukkan email" maxlength="50" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Password</span>
              <input type="password" name="pass" class="form-control" placeholder="Masukkan password" maxlength="30" value="<?php echo $pass; ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Ulangi Password</span>
              <input type="password" name="pass2" class="form-control" placeholder="Masukkan password" maxlength="30" value="<?php echo $pass; ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Nama Lengkap</span>
              <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" maxlength="50" value="<?php echo $nama; ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Jenis Kelamin</span>
              <select name="gender" id="" class="form-select">
                  <option value="#" <?php if($gender == "#") echo "selected"; ?>>-- Pilih salah satu --</option>
                  <option value="L" <?php if($gender == "L") echo "selected"; ?>>Laki-Laki</option>
                  <option value="P" <?php if($gender == "P") echo "selected"; ?>>Perempuan</option>
              </select>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Nomor WA</span>
              <input type="number" name="wa" class="form-control" placeholder="Masukkan nomor WhatsApp" maxlength="11" value="<?php echo $wa; ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Alamat</span>
              <textarea name="alamat" id="alamat" cols="30" rows="10" placeholder="Masukkan keterangan produk (boleh dikosongi)" class="form-control" required><?php echo $alamat; ?></textarea>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Level Akses</span>
              <select name="level" id="" class="form-select">
                <option value="#" <?php if($level == "") echo "selected"; ?>>-- Pilih salah satu --</option>
                <option value="1" <?php if($level == 1) echo "selected"; ?>>Admin</option>
                <option value="0" <?php if($level == 0) echo "selected"; ?>>User</option>
              </select>
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