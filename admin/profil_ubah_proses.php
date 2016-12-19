<?php 

include '../config/koneksi.php';
include '../helper/helper.php';

$id_admin = $_POST['submit'];
$nama_admin = $_POST['nama'];
$no_telfon = $_POST['no_telfon'];
$email = $_POST['email'];
$no_rek = $_POST['no_rek'];

$sql = "UPDATE tb_admin SET nama_admin='$nama_admin', no_telfon='$no_telfon', email='$email', no_rekening='$no_rek' WHERE id_admin='$id_admin'";
	    $result = $koneksi->query($sql);    
	    header("location:index.php?halaman=profil");

 ?>