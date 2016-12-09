<?php 

include '../config/koneksi.php';
include '../helper/helper.php';

// cek row from db
$sql = "SELECT MAX(id_kategori) FROM tb_kategori";
$res = $koneksi->query($sql);
$get_id = $res->fetch_array();

// automatic id
if (empty($get_id[0])) {
	$id = "11";
}else{
	$get_max = substr($get_id[0], 1)+1;
	$id = "1".$get_max;
}

$kategori = $_POST['kategori'];

$sql = "INSERT INTO tb_kategori values ('$id','$kategori')";
	$res = $koneksi->query($sql);

	if ($res) {
		Helper::alertDirectRoot('Tambah Kategori Sukses','manaje_kategori');
	}else{
		Helper::alertDirectRoot('Tambah Kategori Gagal','manaje_kategori');
	}

 ?>