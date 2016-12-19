<?php 

include '../config/koneksi.php';
include '../helper/helper.php';

// get id barang yang di klik
    $id_barang = $_GET['id_barang'];
    $sql = "DELETE FROM tb_barang WHERE id_barang='$id_barang'";
    $res = $koneksi->query($sql);
	
	if ($res) {
		Helper::alertDirectRoot('Hapus Dagangan Sukses','mastering_barang');
	}else{
		Helper::alertDirectRoot('Hapus Dagangan Gagal','mastering_barang');
	}

 ?>