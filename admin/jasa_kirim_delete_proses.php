<?php 

include '../config/koneksi.php';

// if button hapus onclick
if (isset($_GET['submit'])) {
    $id_jasa_pengiriman = $_GET['submit'];
    $sql = "DELETE FROM tb_jasa_pengiriman WHERE id_jasa_pengiriman='$id_jasa_pengiriman'";
    $result = $koneksi->query($sql);    
    header("location:index.php?halaman=jasa_kirim");
}
// else if button ubah onclick direct link and send id parameter
else if(isset($_GET['submit1'])){
	$id_jasa_pengiriman = $_GET['submit1'];
	header("location:index.php?halaman=ubah_jasa_kirim&id_jasa_kirim='$id_jasa_pengiriman'");
}

 ?>