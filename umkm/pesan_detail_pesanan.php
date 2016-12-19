<?php
	$id_pesan = $_GET['id_pesan'];
?>

<!-- row -->
<div class="row">
    <div class="col-lg-12">
    <h2><b>Detail Pesanan <?php echo $id_pesan;?></b></h2>
    <hr>

    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <div class="box box-primary">
                          
        <div class="box-body table-responsive">

          <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
						<th>ID Barang</th>
                        <th>Nama Barang</th>
						<th>Gambar</th>
                        <th>Jumlah Pesan</th>
                        <th>Sub Biaya</th>
                        <th>Tanggal Pesan</th>
                        <th>Alamat Pengiriman</th>
                    </tr>
                </thead>
                <tbody>

            <?php 
            include '../config/koneksi.php';
            $no = 1;
           
            $sql = "SELECT tb_detail_pesan.id_barang, tb_barang.nama_barang, tb_barang.gambar_barang, tb_detail_pesan.jumlah_pesan,
					tb_detail_pesan.sub_total, tb_pesan.tanggal_pesan, tb_pelanggan.alamat_pelanggan, tb_pesan.catatan
					FROM tb_detail_pesan, tb_barang, tb_pesan, tb_pelanggan
					WHERE tb_barang.id_barang = tb_detail_pesan.id_barang
					AND tb_pesan.id_pesan = tb_detail_pesan.id_pesan
					AND tb_pesan.id_pelanggan = tb_pelanggan.id_pelanggan
					AND tb_detail_pesan.id_pesan = '$id_pesan'";
            
            $result = $koneksi->query($sql);
            ?>

                <?php while ($row= $result->fetch_array()) {  ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['id_barang']; ?></td>
                    <td><?php echo $row['nama_barang']; ?></td>
                    <td><?php echo "<img src='../img/dagangan_UMKM/".$row['gambar_barang']."' width='100px' height='100px'/>"; ?></td>
                    <td align="center"><?php echo $row['jumlah_pesan']; ?></td>
                    <td><?php echo $row['sub_total']; ?></td>
					<td><?php echo $row['tanggal_pesan']; ?></td>
					<td><?php echo $row['alamat_pelanggan']; ?></td>
                </tr>
                <?php $no++;} ?>
                </tbody>
            </table>
			
			<form method="post" action="pesan_proses_kirim_resi.php?id_pesan=<?php echo $id_pesan;?>" role="form">
				<div class="form-group">
					<label>Catatan</label>
					<textarea class="form-control" placeholder="" name="resi" type="text" readonly="readonly"><?php
						$sql = "SELECT tb_pesan.catatan FROM tb_pesan WHERE tb_pesan.id_pesan = '$id_pesan'";
						$result1 = $koneksi->query($sql);
						
						while ($row1= $result1->fetch_array()) {
							echo $row1['catatan'];
					} ?></textarea>
				</div>
				<div class="form-group">
					<label>No. Resi Pengiriman Barang</label>
					<input class="form-control" placeholder="*Masukkan No Resi Ketika Barang Sudah Dikirim" name="resi" type="text" required>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success"> <span class="glyphicon glyphicon-envelope"> Kirim Barang </span></button>
				</div>
				<div class="form-group">
					<a href="index.php?halaman=manaje_pesan" class="btn btn-danger">
						<span class="glyphicon glyphicon-backward"></span> Kembali
					</a>
				</div>
			</form>

        </div>
        </div>
      </div>
     </div>
    </div>
</div>
</div>
<!-- end row -->