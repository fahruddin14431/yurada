<?php 

include '../config/koneksi.php';
include '../helper/helper.php';

$id_jasa_kirim = $_POST['id_jasa_kirim'];
$nama_jasa_kirim = strtoupper($_POST['nama_jasa_kirim']);

$sql = "UPDATE tb_jasa_pengiriman SET nama_jasa_pengiriman='$nama_jasa_kirim' WHERE id_jasa_pengiriman='$id_jasa_kirim'";
	    $result = $koneksi->query($sql);    
	    header("location:index.php?halaman=jasa_kirim");

 ?>