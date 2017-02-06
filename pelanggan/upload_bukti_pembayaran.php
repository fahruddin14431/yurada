<?php

include '../config/koneksi.php';
include '../helper/helper.php';

session_start();
$fileName =$_FILES['bukti_pembayaran']['name'];
move_uploaded_file($_FILES['bukti_pembayaran']['tmp_name'], "../img/uploads/".$_FILES['bukti_pembayaran']['name']);


$biaya = str_replace('Rp.', '', $_POST['biaya']);
$id_pembayaran = $_POST['id_pembayaran'];
// $id_pesan = $_POST['id_pesan'];


$sql = "insert into tb_pembayaran values ('$id_pembayaran','PSN001001','$biaya','1','$fileName','0')";
$res = $koneksi->query ($sql);

	if($res) {
		Helper::alertDirect('upload pembayaran sukses','payment');
	}else{
		Helper::alertDirect('upload pembayaran gagal','payment');
	}

?>