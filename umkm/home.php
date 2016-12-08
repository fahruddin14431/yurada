<?php 
session_start();
$id_umkm = $_SESSION['id_umkm'];
include '../config/koneksi.php';

$sql = "SELECT * FROM tb_umkm WHERE id_umkm='$id_umkm'";
$result = $koneksi->query($sql);
$row = $result->fetch_array();
$nama_umkm = $row['nama_umkm'];

 ?>

<!-- row -->
<div class="row">
    <div class="col-lg-12">
      <h2 class="page-header"><b>Selamat Datang UMKM : <?php echo $nama_umkm; ?></b></h1>
    </div>
</div>
<!-- end row -->