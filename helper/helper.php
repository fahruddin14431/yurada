<?php 

/**
* alert js
*/
class Helper {

		public static function alertDirect($pesan,$halaman){
			echo "<script type='text/javascript'> alert('$pesan'); window.location='../index.php?halaman=$halaman'; </script>";
		}

		public static function alertDirectLogin($pesan,$halaman){
			echo "<script type='text/javascript'> alert('$pesan'); window.location='index.php?halaman=$halaman'; </script>";
		}
	}

?>