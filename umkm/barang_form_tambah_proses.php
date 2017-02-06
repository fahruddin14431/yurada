<?php 

include '../config/koneksi.php';
include '../helper/helper.php';
session_start();
$id_umkm = $_SESSION['id_umkm'];

$fileName = $_FILES['gambar']['name'];
// Simpan di Folder Gambar
move_uploaded_file($_FILES['gambar']['tmp_name'], "../img/dagangan_UMKM/".$_FILES['gambar']['name']);

// mengambil $_POST dari form
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$kategori_barang = $_POST['kategori_barang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$detail = $_POST['detail'];

$sql = "INSERT INTO tb_barang values ('$kode_barang','$id_umkm','$nama_barang','$kategori_barang','$harga','$stok','$fileName','$detail')";
$res = $koneksi->query($sql);

	if ($res) {
		Helper::alertDirectRoot('Tambah Dagangan Sukses','mastering_barang');
	}else{
		Helper::alertDirectRoot('Tambah Dagangan Gagal','mastering_barang');
	}

?>