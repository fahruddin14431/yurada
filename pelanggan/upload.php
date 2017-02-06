<?php

include '..config/koneksi.php';
include '..helper/herper.php';
session_start();
$id_pembayaran = $_SESSION ['id_pembayaran'];
$fileName =$_FILES['bukti_transfer']['name'];
move_uploaded_file($_FILES ['bukti_transfer']['tmp_name'], "../img/uploads/".$_FILES['bukti_transfer']['name']);

$sql = "insert into tb_pembayaran values ('byr1001101002','psn1001101','','','$fileName','')";
$res = $koneksi->query ($sql);

	if($res) {
		Helper::alertDirect('upload pembayaran sukses','laporan');
	}else{
		Helper::alertDirectRoot ('upload pembayaran gagal','payment');
	}

?>