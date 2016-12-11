<!-- row -->
<div class="row">
    <div class="col-lg-12">
    <h2><b> Validasi Pembayaran UMKM </b></h2>
    <hr>

    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <div class="box box-primary">
                          
        <div class="box-body table-responsive">

        <form action="validasi_bayar_proses.php" method="GET">
        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal Pesan</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Total Biaya</th>
                        <th>Gambar Bukti</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
            <?php 
            include '../config/koneksi.php';

            $no = 1;           
            $sql = "SELECT  tb_pelanggan.id_pelanggan, 
                            tb_pelanggan.nama_pelanggan,
                            tb_pesan.id_pesan,
                            tb_pesan.tanggal_pesan,
                            tb_barang.id_barang,
                            tb_barang.nama_barang,
                            tb_barang.harga_barang,
                            tb_detail_pesan.jumlah_pesan,
                            tb_pesan.total_biaya,
                            tb_pembayaran.id_pembayaran,
                            tb_pembayaran.bukti_pembayaran,
                            tb_pembayaran.status
                    FROM tb_pelanggan, tb_pesan, tb_barang, tb_detail_pesan, tb_pembayaran
                    WHERE tb_pelanggan.id_pelanggan = tb_pesan.id_pelanggan
                    AND tb_pesan.id_pesan = tb_detail_pesan.id_pesan
                    AND tb_pesan.id_pesan = tb_pembayaran.id_pesan
                    AND tb_barang.id_barang = tb_detail_pesan.id_barang
                    AND tb_pembayaran.status ='0'";            
            $result = $koneksi->query($sql);
            ?>

                <?php while ($row= $result->fetch_array()) {  ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['nama_pelanggan']; ?></td>
                    <td><?php echo $row['tanggal_pesan']; ?></td>
                    <td><?php echo $row['nama_barang']; ?></td>
                    <td><?php echo $row['jumlah_pesan']; ?></td>
                    <td><?php echo $row['total_biaya']; ?></td>
                    <td>Gambar</td>
                    <td>
                        <button type="submit" name="submit" class="btn btn-success" value="<?php echo $row['id_pembayaran']; ?>">
                            <i class="fa fa-check fa-fw"></i> Valid
                        </button>
                    </td>                
                </tr>
                <?php $no++;} ?>
                </tbody>
            </table>
            </form>

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