<?php
session_start();
unset($_SESSION['id_pelanggan']);
unset($_SESSION['id_umkm']);
unset($_SESSION['id_admin']);
header("location:index.php");
?>