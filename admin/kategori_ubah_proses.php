<?php 

include '../config/koneksi.php';
include '../helper/helper.php';

$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

$sql = "UPDATE tb_kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'";
	    $result = $koneksi->query($sql);    
	    header("location:index.php?halaman=manaje_kategori");

 ?>