<?php
require 'db.php';
$sql = 'SELECT * FROM mahasiswa';
$statement = $connection->prepare($sql);
$statement->execute();
$mahasiswa = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<?php require 'header.php'; ?>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Daftar Mahasiswa</h2>
            </div>
            <div class="card-body">
                <a href="masukkan.php" class="btn btn-primary mb-3">+ Masukkan Data</a>
                <table class="table table-bordered">
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($mahasiswa as $mhs): ?>
                    <tr>
                        <td><?= $mhs->nim; ?></td>
                        <td><?= $mhs->nama; ?></td>
                        <td><?= $mhs->email; ?></td>
                        <td>
                            <center>
                            <a href="edit.php?id=<?= $mhs->id ?>" class="btn btn-info">Edit</a>
                            <a onclick="return confirm('Are you sure you want to delete this entry?')" href="hapus.php?id=<?= $mhs->id ?>" class="btn btn-danger">Hapus</a>
                            </center>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
<?php require 'footer.php'; ?>
