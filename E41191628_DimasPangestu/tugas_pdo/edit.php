<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM mahasiswa WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id]);
$mhs = $statement->fetch(PDO::FETCH_OBJ);
if (isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['email'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $sql = 'UPDATE mahasiswa SET nim=:nim, nama=:nama, email=:email WHERE id=:id';
    $statement = $connection->prepare($sql);
    if ($statement->execute([':nim' => $nim, ':nama' => $nama, ':email' => $email, ':id' => $id])) {
        header("Location: index.php");
    }
}

?>

<?php require 'header.php'; ?>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Edit Data</h2>
            </div>
            <div class="card-body">
                <?php if(!empty($message)): ?>
                    <div class="alert alert-success">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>
                <form method="post">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input value="<?= $mhs->nim; ?>" type="text" name="nim" id="nim" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input value="<?= $mhs->nama; ?>" type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input value="<?= $mhs->email; ?>" type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Simpan</button>
                        <a href="index.php" class="btn btn-light">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require 'footer.php'; ?>
