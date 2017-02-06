<?php 

include '../config/koneksi.php';
include '../helper/helper.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$pemilik = $_POST['pemilik'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$deskripsi = $_POST['deskripsi'];
$alamat = $_POST['alamat'];

$sql = "UPDATE tb_umkm SET nama_umkm='$nama', nama_pemilik='$pemilik', alamat_umkm='$alamat', email='$email', no_telfon='$telp', deskripsi_umkm='$deskripsi' WHERE id_umkm='$id'";
	    $result = $koneksi->query($sql);    
	    header("location:index.php?halaman=profil");

?>