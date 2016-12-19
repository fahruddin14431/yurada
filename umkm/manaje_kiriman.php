<!-- row -->
<div class="row">
    <div class="col-lg-12">
    <h2><b>Manajemen Pengiriman Barang </b></h2>
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
                        <th>Id Pesan</th>
                        <th>Tanggal</th>
                        <th>Total Biaya</th>
                        <th>Id Pembayaran</th>
                        <th>Bukti Pembayaran</th>
						<th>No. Resi</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>

            <?php 
            include '../config/koneksi.php';
            $no = 1;
            $sql = "SELECT tb_pesan.id_pesan, tb_pesan.tanggal_pesan, tb_pesan.total_biaya, 
					tb_pembayaran.id_pembayaran, tb_pembayaran.bukti_pembayaran, tb_pembayaran.no_resi
					FROM tb_pesan, tb_pembayaran 
					WHERE tb_pesan.id_pesan = tb_pembayaran.id_pesan
					AND tb_pembayaran.status = 1
                    AND tb_pesan.status_kirim = '1'";
            
            $result = $koneksi->query($sql);
            ?>

                <?php while ($row= $result->fetch_array()) {  ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['id_pesan']; ?></td>
                    <td><?php echo $row['tanggal_pesan']; ?></td>
                    <td><?php echo $row['total_biaya']; ?></td>
                    <td><?php echo $row['id_pembayaran']; ?></td>
					<td><?php echo "<img src='../img/dagangan_UMKM/".$row['bukti_pembayaran']."' width='100px' height='100px'/>"; ?></td>
					<td><?php echo $row['no_resi']; ?></td>
					<td>
						<a href="index.php?halaman=detail_pesan&&id_pesan=<?php echo $row['id_pesan']; ?>" class="btn btn-warning">
                            <span class="glyphicon glyphicon-edit"></span> Edit Kiriman 
                        </a>
                    </td>
                </tr>
                <?php $no++;} ?>
                </tbody>
            </table>

        </div>
        <script>
          $(document).ready(function(){
            $('#tabel-data').DataTable();
        });
        </script>
            
        </div>
      </div>
     </div>
    </div>
</div>
</div>
<!-- end row -->