<?php
require 'db.php';
$message = '';
if (isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['email'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $sql = 'INSERT INTO mahasiswa(nim, nama, email) VALUES(:nim, :nama, :email)';
    $statement = $connection->prepare($sql);
    if ($statement->execute([':nim' => $nim, ':nama' => $nama, ':email' => $email])) {
        $message = 'Data Berhasil Disimpan';
    }
}

?>

<?php require 'header.php'; ?>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Masukkan Mahasiswa</h2>
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
                        <input type="text" name="nim" id="nim" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
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
