<?php
    require_once "connection.php";
    $id_transaksi = $_GET["id_transaksi"];

    // Ubah status sesuai keterangan
    if($_GET["status"] == "batal"){
        $sql = "update transaksi set status='gagal' where id_transaksi=$id_transaksi";
    }elseif ($_GET["status"] == "konfirmasi") {
        $status = $_GET["dbstatus"];
        $tabungan = $_GET["hasil"];

        $sql = "update transaksi set status='$status', tabungan=$tabungan where id_transaksi=$id_transaksi";
    }
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: tabungan.php");
    }
?>