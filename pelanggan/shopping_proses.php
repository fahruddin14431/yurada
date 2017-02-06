<?php 

include '../config/koneksi.php';
include '../helper/helper.php';

session_start();
$id_pelanggan = $_SESSION['id_pelanggan'];
$id_barang = $_SESSION['id_barang'];
$jumlah = $_POST['jumlah_pesan'];

$sql = "SELECT tb_barang.harga_barang,tb_barang.id_barang, tb_barang.nama_barang, tb_barang.jumlah_stok, tb_barang.spesifikasi_barang, tb_barang.gambar_barang, tb_kategori.nama_kategori FROM tb_barang, tb_kategori WHERE tb_barang.id_kategori=tb_kategori.id_kategori AND id_barang='$id_barang'";
$detail = $koneksi->query($sql);
while ($row= $detail->fetch_array()) { 

// mengambil $_POST dari form
$id_barang = $row['id_barang'];
$nama_barang = $row['nama_barang'];
$kategori_barang = $row['nama_kategori'];
$harga = $row['harga_barang'];
$jumlah_pesan = $_POST['jumlah_pesan'];
$tagihan = $jumlah_pesan * $harga;
}

$_SESSION['subtotal'] = $tagihan;

//insert shoppingcart
$sql = "INSERT INTO shoppingcart values ('$id_pelanggan','$id_barang','$nama_barang','$kategori_barang','$harga','$jumlah_pesan','$tagihan')";
$res = $koneksi->query($sql);

	if ($res) {
		Helper::alertDirect('Tambah Pesan Sukses','shoppingcart');
	}else{
		Helper::alertDirect('Tambah Pesan Gagal','shoppingcart');
	}

?>