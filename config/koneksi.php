<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbName = "db_olshop_yurada";

$koneksi = new mysqli($host,$user,$pass,$dbName);

if ($koneksi->connect_errno) {
	die('Koneksi error : ' . $koneksi->connect_errno);
}


 ?>