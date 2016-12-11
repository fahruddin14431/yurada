<?php
session_start();
if ($_SESSION['id_pelanggan']) {
	unset($_SESSION['id_pelanggan']);
	}else if ($_SESSION['id_umkm']) {
		unset($_SESSION['id_umkm']);
		}else if ($_SESSION['id_admin']) {
			unset($_SESSION['id_admin']);
		}
header("location:index.php");
?>