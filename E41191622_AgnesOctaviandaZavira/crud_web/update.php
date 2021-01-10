<?php
include 'koneksi.php';
$id = $POST['id'];
$nama = $POST['nama'];
$alamat = $POST['alamat'];
$pekerjaan = $POST['pekerjaan'];

mysqli_query($koneksi, "update user set name'$nama', alamat='$alamat, pekerjaan='$pekerjaan' where id='$id'");

header("location:index.php?pesan=update");
?>