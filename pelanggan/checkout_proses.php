<?php 

include '../config/koneksi.php';
include '../helper/helper.php';

session_start();

// cek row from db
$sql = "SELECT MAX(id_pesan) FROM tb_pesan";
$res = $koneksi->query($sql);
$get_id = $res->fetch_array();

// automatic id
if (empty($get_id[0])) {
	$id_pesan = "PSN001001";
}else{
	$get_max = substr($get_id[0], 8)+1;
	$id_pesan = "PSN00100".$get_max;
}
$id_pelanggan = $_SESSION['id_pelanggan'];
$tgl_pesan = date("Y-m-d");
$total_biaya = $_SESSION['tagihan'];
$alamat = $_POST['alamat'];
$id_kota = $_POST['kota'];
$id_propinsi = $_POST['propinsi'];
$catatan = $_POST['catatan'];

// insert tb_pesan
$sql = "INSERT INTO tb_pesan values ('$id_pesan','$id_pelanggan','$tgl_pesan','$total_biaya','$alamat','$id_kota','$id_propinsi','$catatan')";
$res = $koneksi->query($sql);
var_dump($res);
	// if ($res) {
	// 	Helper::alertDirect('Checkout Sukses','payment');
	// }else{
	// 	Helper::alertDirect('Checkout Pesan Gagal','payment');
	// }


// insert tb_detail_pesan
$sql = "SELECT * FROM shoppingcart";
$res = $koneksi->query($sql);
while ($row= $res->fetch_array()) { 

// mengambil $data dari db
// $id_pelanggan = $row['id_pelanggan'];
// $nama_barang = $row['id_barang'];
// $kategori_barang = $row['jumlah'];
// $harga = $row['harga_barang'];
// $jumlah_pesan = $_POST['jumlah_pesan'];
// $tagihan = $jumlah_pesan * $harga;
}

 ?>