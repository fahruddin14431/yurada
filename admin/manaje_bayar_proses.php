<?php 

include '../config/koneksi.php';

if (isset($_GET['submit1'])) {
    $id_pembayaran = $_GET['submit1'];
	$sql = "UPDATE tb_pembayaran SET status='0' WHERE id_pembayaran='$id_pembayaran'";
    $result = $koneksi->query($sql);    
    header("location:index.php?halaman=manaje_bayar");
}


 ?>