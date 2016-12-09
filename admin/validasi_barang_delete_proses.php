<?php 

include '../config/koneksi.php';

// if button hapus onclick
if (isset($_GET['submit1'])) {
    $id_barang = $_GET['submit1'];
    $sql = "DELETE FROM tb_barang WHERE id_barang='$id_barang'";
    $result = $koneksi->query($sql);    
    header("location:index.php?halaman=validasi_barang");
}
// else if button detail onclick direct link and send id parameter
else if(isset($_GET['submit'])){
	$id_barang = $_GET['submit'];
	header("location:index.php?halaman=validasi_barang_detail&id_barang='$id_barang'");
}

 ?>