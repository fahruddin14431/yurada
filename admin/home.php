<?php 
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
      <h2><b>Selamat Datang Administrator : <?php echo $nama_admin; ?></b></h2>
      <hr>      	
      	<div class="row">
      		<?php  

	      	$sql = "SELECT COUNT(id_umkm) FROM tb_umkm WHERE status='0'";
	      	$result = $koneksi->query($sql);
	      	$row = $result->fetch_array();
	      	$umkm_belum_terACC = $row[0];

	      	?>
	      	<div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-red">
	            <div class="inner">
	              <h3><?php echo $umkm_belum_terACC; ?></h3>

	              <p>UMKM Belum Ter-ACC</p>
	            </div>
	            <div class="icon">
	              <i class="fa fa-users"></i>
	            </div>
	            <a href="index.php?halaman=acc_umkm" class="small-box-footer">Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	          <!-- ends small box -->
	        </div>
	        <!-- ends cols -->

	        <?php  

	      	$sql = "SELECT COUNT(id_umkm) FROM tb_umkm WHERE status='1'";
	      	$result = $koneksi->query($sql);
	      	$row = $result->fetch_array();
	      	$umkm_terdaftar = $row[0];

	      	?>

	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-green">
	            <div class="inner">
	              <h3><?php echo $umkm_terdaftar; ?></h3>

	              <p>UMKM Terdaftar</p>
	            </div>
	            <div class="icon">
	              <i class="fa fa-users"></i>
	            </div>
	            <a href="index.php?halaman=manaje_umkm" class="small-box-footer">Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	          <!-- ends small box -->
	        </div>
	        <!-- ends cols -->

	        <?php  

	      	$sql = "SELECT COUNT(id_barang) FROM tb_barang";
	      	$result = $koneksi->query($sql);
	      	$row = $result->fetch_array();
	      	$jumlah_product = $row[0];

	      	?>

	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-aqua">
	            <div class="inner">
	              <h3><?php echo $jumlah_product; ?></h3>

	              <p>Jumlah Product UMKM</p>
	            </div>
	            <div class="icon">
	              <i class="fa fa-th"></i>
	            </div>
	            <a href="index.php?halaman=validasi_barang" class="small-box-footer">Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	          <!-- ends small box -->
	        </div>
	        <!-- ends cols -->

	        <?php  

	      	$sql = "SELECT COUNT(id_jasa_pengiriman) FROM tb_jasa_pengiriman";
	      	$result = $koneksi->query($sql);
	      	$row = $result->fetch_array();
	      	$jumlah_jasa_pengiriman = $row[0];

	      	?>

	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-yellow">
	            <div class="inner">
	              <h3><?php echo $jumlah_jasa_pengiriman; ?></h3>

	              <p>Jumlah Jasa Pengiriman</p>
	            </div>
	            <div class="icon">
	              <i class="fa fa-motorcycle"></i>
	            </div>
	            <a href="index.php?halaman=jasa_kirim" class="small-box-footer">Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	          <!-- ends small box -->
	        </div>
	        <!-- ends cols -->

	        <?php  

	      	$sql = "SELECT COUNT(id_kategori) FROM tb_kategori";
	      	$result = $koneksi->query($sql);
	      	$row = $result->fetch_array();
	      	$jumlah_kategori = $row[0];

	      	?>

	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-purple">
	            <div class="inner">
	              <h3><?php echo $jumlah_kategori; ?></h3>

	              <p>Jumlah Kategori</p>
	            </div>
	            <div class="icon">
	              <i class="fa fa-tags"></i>
	            </div>
	            <a href="index.php?halaman=manaje_kategori" class="small-box-footer">Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	          <!-- ends small box -->
	        </div>
	        <!-- ends cols -->

	    </div>
      	<!-- ends row -->
    </div>
</div>
<!-- end row -->