<?php
session_start();
include 'config/koneksi.php'; 
include 'helper/helper.php';

//meyimpan varibel $_POST yang dikirim
$status = $_POST['status'];
$email  = $_POST['email'];
$ubah   = $_POST['password']; 
//merubah variabel $ubah ke MD5
$pass   =sha1(md5($ubah , 'yuradatamvan'));

if ($status=="pelanggan") {	

 	$aksi="SELECT id_pelanggan, email, kata_sandi FROM tb_pelanggan WHERE email='$email'";
 	$hasil= mysqli_query($koneksi, $aksi);
 	$data=mysqli_fetch_array($hasil);

	 if($pass !== $data['kata_sandi']) {
	 	Helper::alertDirectRoot('Login Gagal Pelanggan','login');
	 }elseif ($pass == $data['kata_sandi']){
	 	$_SESSION['id_pelanggan']=$data['id_pelanggan'];
	 	Helper::alertDirectRoot('Login Sukses','home');
	 }
}else if($status=="umkm"){

	$aksi="SELECT id_umkm, email, kata_sandi FROM tb_umkm WHERE email='$email' AND status='1'";
 	$hasil= mysqli_query($koneksi, $aksi);
 	$data=mysqli_fetch_array($hasil);

	 if($pass !== $data['kata_sandi']) {
	 	Helper::alertDirectRoot('Login Gagal UMKM','login');
	 }elseif ($pass == $data['kata_sandi']){
	 	$_SESSION['id_umkm'] = $data['id_umkm'];
	 	header("location:umkm/index.php");
	 }
}else if($status=="administrator"){
	$aksi="SELECT id_admin, email, kata_sandi FROM tb_admin WHERE email='$email'";
 	$hasil= mysqli_query($koneksi, $aksi);
 	$data=mysqli_fetch_array($hasil);

	 if($pass !== $data['kata_sandi']) {
	 	Helper::alertDirectRoot('Login Gagal Administrator','login');
	 }elseif ($pass == $data['kata_sandi']){
	 	$_SESSION['id_admin']=$data['id_admin'];
	 	header("location:admin/index.php");
	 }
}

?>