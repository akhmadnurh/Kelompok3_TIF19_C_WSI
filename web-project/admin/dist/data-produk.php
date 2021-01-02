
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hi Valeeqa - Admin</title>
  </head>
  <body>
    <?php include "sidebar.php"; ?>
    <?php require_once "connection.php"; ?>
    <div class="container-fluid">
        <h1 class="mt-4">Data Produk</h1>
        <!-- Table -->
        <div class="container-fluid">
            
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Nama Barang</th>
                        <th>Warna</th>
                        <th>Bahan</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                        <th>Stok</th>
                        <th>Best Seller</th>
                    </tr>
                </thead>
                <?php
                    // Query
                    $sql = "SELECT * FROM produk";
                    $query = mysqli_query($conn, $sql);
                    $nomor = 1;
                    
                    // Pagination
                    $batas = 2;
                    


                    while($data = mysqli_fetch_array($query)){
                ?>      
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $data["id_kategori"]; ?></td>
                            <td><?php echo $data["nama_barang"]; ?></td>
                            <td><?php echo $data["warna"]; ?></td>
                            <td><?php echo $data["bahan"]; ?></td>
                            <td><?php echo $data["stok"]; ?></td>
                            <td><?php echo $data["harga"]; ?></td>
                            <td><?php echo $data["keterangan"]; ?></td>
                            <td><?php echo $data["best_seller"]; ?></td>
                        </tr>
                <?php
                        $nomor++;
                    }
                ?>
            </table>
            <!-- Pagination -->
            <nav>
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
