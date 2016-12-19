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
      <h2><b>Selamat Datang UMKM : <?php echo $nama_umkm; ?></b></h2>
      <hr>      	
      	<div class="row">
      		<?php  

	      	$sql = "SELECT COUNT(id_barang) FROM tb_barang";
	      	$result = $koneksi->query($sql);
	      	$row = $result->fetch_array();
	      	$dagangan_UMKM = $row[0];

	      	?>
	      	<div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-aqua">
	            <div class="inner">
	              <h3><?php echo $dagangan_UMKM; ?></h3>

	              <p>Dagangan yang di jual UMKM</p>
	            </div>
	            <div class="icon">
	              <i class="fa fa-shopping-cart"></i>
	            </div>
	            <a href="index.php?halaman=mastering_barang" class="small-box-footer">Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	          <!-- ends small box -->
	        </div>
	        <!-- ends cols -->

	        <?php  

	      	$sql = "SELECT COUNT(tb_pesan.id_pesan)
					FROM tb_pesan, tb_pembayaran 
					WHERE tb_pesan.id_pesan = tb_pembayaran.id_pesan
					AND tb_pembayaran.status = 1
					AND tb_pembayaran.no_resi = ''";
	      	$result = $koneksi->query($sql);
	      	$row = $result->fetch_array();
	      	$pesanan_belum_terlayani = $row[0];

	      	?>

	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-yellow">
	            <div class="inner">
	              <h3><?php echo $pesanan_belum_terlayani ?></h3>

	              <p>Pesanan Belum Terlayani</p>
	            </div>
	            <div class="icon">
	              <i class="fa fa-warning"></i>
	            </div>
	            <a href="index.php?halaman=manaje_pesan" class="small-box-footer">Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	          <!-- ends small box -->
	        </div>
	        <!-- ends cols -->

	        <?php  

	      	$sql = "SELECT COUNT(tb_pesan.id_pesan)
					FROM tb_pesan, tb_pembayaran 
					WHERE tb_pesan.id_pesan = tb_pembayaran.id_pesan
					AND tb_pembayaran.status = 1
                    AND tb_pesan.status_kirim = '1'";
	      	$result = $koneksi->query($sql);
	      	$row = $result->fetch_array();
	      	$pesan_terlayani = $row[0];

	      	?>

	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-green">
	            <div class="inner">
	              <h3><?php echo $pesan_terlayani; ?></h3>

	              <p>Pesanan Yang Sudah Terlayani</p>
	            </div>
	            <div class="icon">
	              <i class="fa fa-check-square"></i>
	            </div>
	            <a href="index.php?halaman=manaje_kiriman" class="small-box-footer">Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	          <!-- ends small box -->
	        </div>
	        <!-- ends cols -->
			
	    </div>
      	<!-- ends row -->
    </div>
</div>
<!-- end row -->