<?php 

include '../config/koneksi.php';
include '../helper/helper.php';

// cek row from db
$sql = "SELECT MAX(id_jasa_pengiriman) FROM tb_jasa_pengiriman";
$res = $koneksi->query($sql);
$get_id = $res->fetch_array();

// automatic id
if (empty($get_id[0])) {
	$id = "JP101";
}else{
	$get_max = substr($get_id[0], 4)+1;
	$id = "JP10".$get_max;
}

$jasa_kirim = strtoupper($_POST['nama_jasakirim']);

$sql = "INSERT INTO tb_jasa_pengiriman values ('$id','$jasa_kirim')";
	$res = $koneksi->query($sql);

	if ($res) {
		Helper::alertDirectRoot('Tambah Jasa Kirim Sukses','jasa_kirim');
	}else{
		Helper::alertDirectRoot('Tambah Jasa Kirim Gagal','jasa_kirim');
	}

 ?>