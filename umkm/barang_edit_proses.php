<?php 

include '../config/koneksi.php';
include '../helper/helper.php';

$fileName = $_FILES['gambar']['name'];
// Simpan di Folder Gambar
move_uploaded_file($_FILES['gambar']['tmp_name'], "../img/dagangan_UMKM/".$_FILES['gambar']['name']);

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$kategori_barang = $_POST['kategori_barang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$detail = $_POST['detail'];

$sql = "UPDATE tb_barang SET nama_barang='$nama_barang', id_kategori='$kategori_barang', harga_barang='$harga', 
		jumlah_stok='$stok', spesifikasi_barang='$detail', gambar_barang='$fileName' WHERE id_barang='$kode_barang'";

$res = $koneksi->query($sql);
if ($res) {
		Helper::alertDirectRoot('Edit Dagangan Sukses','mastering_barang');
	}else{
		Helper::alertDirectRoot('Edit Dagangan Gagal','mastering_barang');
	}


 ?>