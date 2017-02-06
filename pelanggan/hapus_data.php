<?php 

include 'config/koneksi.php';
include 'helper/helper.php';

if (isset($_GET['id_barang'])) {
	$id_barang	= $_GET['id_barang'];

	$sql = "DELETE FROM shoppingcart WHERE id_barang = '$id_barang'";
	$koneksi->query($sql);
	$res = $koneksi->query($sql);
		if ($res) {
			Helper::alertDirectRoot('Hapus Barang Sukses','shoppingcart');
		}else{
			Helper::alertDirectRoot('Hapus Barang Gagal','shoppingcart');
		}
}


 ?>