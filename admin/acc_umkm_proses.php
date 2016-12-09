<?php 

include '../config/koneksi.php';

if (isset($_GET['submit'])) {
    $id_umkm = $_GET['submit'];
    	$sql = "UPDATE tb_umkm SET status='1' WHERE id_umkm='$id_umkm'";
	    $result = $koneksi->query($sql);    
	    header("location:index.php?halaman=acc_umkm");
}


 ?>