<?php 

include '../config/koneksi.php';

// if button hapus onclick
if (isset($_GET['submit'])) {
    $id_kategori = $_GET['submit'];
    $sql = "DELETE FROM tb_kategori WHERE id_kategori='$id_kategori'";
    $result = $koneksi->query($sql);    
    header("location:index.php?halaman=manaje_kategori");
}
// else if button ubah onclick direct link and send id parameter
else if(isset($_GET['submit1'])){
	$id_kategori = $_GET['submit1'];
	header("location:index.php?halaman=ubah_kategori&id_kategori='$id_kategori'");
}

 ?>