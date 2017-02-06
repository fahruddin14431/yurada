<?php 

include '../config/koneksi.php';
include '../helper/helper.php';

$id_barang	= $_GET['id_barang'];
$tagihan	= $_GET['tagihan'];

$sql = "DELETE FROM shoppingcart WHERE id_barang = '$id_barang' AND tagihan = '$tagihan'";
$dia = $koneksi->query($sql);


if ($dia) {
		Helper::alertDirect('Pesanan Dihapus','shoppingcart');
	}else{
		Helper::alertDirect('Gagal Hapus Pesanan','shoppingcart');
	}

 ?>