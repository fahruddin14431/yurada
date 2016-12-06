<?php 

include '../config/koneksi.php';
include '../helper/helper.php';

// cek row from db
$sql = "SELECT MAX(id_umkm) FROM tb_umkm";
$res = $koneksi->query($sql);
$get_id = $res->fetch_array();

// automatic id
if (empty($get_id[0])) {
	$id = "UMKM".$_POST['kota']."101";
}else{
	$get_max = substr($get_id[0], 8)+1;
	$id = "UMKM".$_POST['kota'].$get_max;
}

$get_nama_umkm = ucfirst($_POST['nama_umkm']);
$nama_umkm = mysqli_real_escape_string($koneksi,$get_nama_umkm);

$get_nama = ucfirst($_POST['nama_depan'])." ".ucfirst($_POST['nama_belakang']);
$nama_pemilik = mysqli_real_escape_string($koneksi,$get_nama);

$alamat = ucfirst($_POST['alamat']);
$id_kota = $_POST['kota'];
$id_prov = $_POST['propinsi'];
$email = $_POST['email'];
$no_telp = $_POST['no_telfon'];
$deskripsi = $_POST['deskripsi'];

$id_jasa_pengiriman = $_POST['id_jasa'];

$get_nama_pengguna = ucfirst($_POST['nama_depan']);
$nama_pengguna = mysqli_real_escape_string($koneksi,$get_nama_pengguna);

$ubah = $_POST['kata_sandi'];
$kata_sandi = sha1(md5($ubah, 'yuradatamvan'));

$status = "0";

// foreach ($id_jasa_pengiriman as $value) {
// 	echo "jasa ".$value;
// };

$sql = "SELECT * FROM tb_umkm WHERE no_telfon='$no_telp' OR nama_umkm='$nama_umkm' OR email='$email'";
$res = $koneksi->query($sql);
$row = $res->num_rows;

if($row==1){
	// get method from class Helper
	Helper::alertDirect('Email dan No Telepon Sudah digunakan','daftar_umkm');
}else{
	// insert tb umkm
	$sql = "INSERT INTO tb_umkm values ('$id','$nama_umkm','$nama_pemilik','$alamat','$id_kota','$id_prov','$email','$no_telp','$deskripsi','$nama_pengguna','$kata_sandi','$status')";
	$res = $koneksi->query($sql);

	// insert tb detail_jasa_pengiriman
	foreach ($id_jasa_pengiriman as $id_jasa) {
		$sql = "INSERT INTO tb_detail_jasa_pengiriman values ('$id_jasa','$id')";
		$res = $koneksi->query($sql);
	}

	if ($res) {
		Helper::alertDirect('Pendaftaran Sukses Tunggu','home');
	}else{
		Helper::alertDirect('Pendaftaran Gagal','home');
	}
}

 ?>

