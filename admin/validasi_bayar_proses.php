<?php 

include '../config/koneksi.php';

if (isset($_GET['submit'])) {
    $id_pembayaran = $_GET['submit'];
	$sql = "UPDATE tb_pembayaran SET status='1' WHERE id_pembayaran='$id_pembayaran'";
    $result = $koneksi->query($sql);    
    header("location:index.php?halaman=validasi_bayar");
}


 ?>