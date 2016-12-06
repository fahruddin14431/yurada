<?php
session_start();
include 'config/koneksi.php'; 
include 'helper/helper.php';

$email=$_POST['email'];
$ubah=$_POST['password']; 
//meyimpan varibel $_POST yang dikirim
$pass=sha1(md5($ubah , 'yuradatamvan'));
//merubah variabel $ubah ke MD5

 	$aksi="SELECT id_pelanggan, email, kata_sandi FROM tb_pelanggan WHERE email='$email'";
 	$hasil= mysqli_query($koneksi, $aksi);
 	$data=mysqli_fetch_array($hasil);

	 if($pass !== $data['kata_sandi']) {
	 	Helper::alertDirect('Email atau Kata Sandi Salah','login');
	 }elseif ($pass == $data['kata_sandi']){
	 	$_SESSION['id_pelanggan']=$data['id_pelanggan'];
	 	Helper::alertDirectLogin('Login Sukses','home');
	 }
?>