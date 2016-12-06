<?php
session_start();
unset($_SESSION['id_pelanggan']);
header("location:index.php");
?>