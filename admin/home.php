<?php 
session_start();
$id_admin = $_SESSION['id_admin'];
include '../config/koneksi.php';

$sql = "SELECT * FROM tb_admin WHERE id_admin='$id_admin'";
$result = $koneksi->query($sql);
$row = $result->fetch_array();
$nama_admin = $row['nama_admin'];

 ?>

<!-- row -->
<div class="row">
    <div class="col-lg-12">
      <h2 class="page-header"><b>Selamat Datang Administrator : <?php echo $nama_admin; ?></b></h1>
    </div>
</div>
<!-- end row -->