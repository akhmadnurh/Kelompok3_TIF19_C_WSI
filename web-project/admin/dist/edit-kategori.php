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
        $title = "Edit Kategori";

        $id_kategori = $_GET["id_kategori"];
        $sql = "SELECT * FROM kategori where id_kategori=$id_kategori";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($query);

        $nama_kategori = $data["nama_kategori"];
      }else{
        // Code here
        $title = "Tambah Kategori";
        $id_kategori = "";
        $nama_kategori = "";
      }
      $status = $_GET["status"];
    ?>
    <div class="container">
      <div class="card" style="margin-top: 100px;">
        <div class="card-header">
          <h1><?php echo $title; ?></h1>
        </div>
        <div class="card-body">
          <form action="edit-kategori-process.php?status=<?php echo $status; if($id_kategori != "") echo "&id_kategori=".$id_kategori; ?>" method="POST">
            <div class="input-group mb-3">
              <span class="input-group-text">Nama Kategori</span>
              <input type="text" name="kategori" class="form-control" placeholder="Masukkan nama kategori" maxlength="40" value="<?php echo $nama_kategori; ?>" required>
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