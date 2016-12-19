<?php 

include '../config/koneksi.php';
include '../helper/helper.php';

$resi = $_POST['resi'];
$id_pesan = $_GET['id_pesan'];

$sql = "UPDATE tb_pembayaran, tb_pesan SET tb_pembayaran.no_resi='$resi', tb_pesan.status_kirim='1' WHERE tb_pesan.id_pesan='$id_pesan'";

$res = $koneksi->query($sql);
if ($res) {
		Helper::alertDirectRoot('Update Pengiriman Sukses','manaje_pesan');
	}else{
		Helper::alertDirectRoot('Update Pengiriman Gagal','manaje_pesan');
	}


 ?>