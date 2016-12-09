<?php 

include '../config/koneksi.php';

if (isset($_GET['submit'])) {
    $id_umkm = $_GET['submit'];
    $sql = "DELETE FROM tb_umkm WHERE id_umkm='$id_umkm'";
    $result = $koneksi->query($sql);   
    header("location:index.php?halaman=manaje_umkm"); 
}

 ?>