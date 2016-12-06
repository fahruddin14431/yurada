<?php 

include '../config/koneksi.php';
include '../helper/helper.php';

// cek row from db
$sql = "SELECT MAX(id_pelanggan) FROM tb_pelanggan";
$res = $koneksi->query($sql);
$get_id = $res->fetch_array();

// automatic id
if (empty($get_id[0])) {
	$id = "PEL".$_POST['kota']."101";
}else{
	$get_max = substr($get_id[0], 7)+1;
	$id = "PEL".$_POST['kota'].$get_max;
}

$get_nama = ucfirst($_POST['nama_depan'])." ".ucfirst($_POST['nama_belakang']);
$nama = mysqli_real_escape_string($koneksi,$get_nama);

$alamat = ucfirst($_POST['alamat']);
$id_kota = $_POST['kota'];
$id_prov = $_POST['propinsi'];
$no_telp = $_POST['no_telfon'];
$email = $_POST['email'];

$ubah = $_POST['kata_sandi'];
$kata_sandi = sha1(md5($ubah, 'yuradatamvan'));

$sql = "SELECT * FROM tb_pelanggan WHERE no_telfon='$no_telp' OR email='$email'";
$res = $koneksi->query($sql);
$row = $res->num_rows;

if($row==1){
	// get method from class Helper
	Helper::alertDirect('Email dan No Telepon Sudah digunakan','daftar_pelanggan');
}else{
	$sql = "INSERT INTO tb_pelanggan values ('$id','$nama','$alamat','$id_kota','$id_prov','$no_telp','$email','$kata_sandi')";
	$res = $koneksi->query($sql);

	if ($res) {
		Helper::alertDirect('Pendaftaran Sukses','home');
	}else{
		Helper::alertDirect('Pendaftaran Gagal','home');
	}
}

 ?>

