<!-- row -->
<div class="row">
    <div class="col-lg-12">
    <h2><b> Daftar Transaksi </b></h2>
    <hr>

    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <div class="box box-primary">
                          
        <div class="box-body table-responsive">

            <form action="manaje_bayar_proses.php" method="GET">
            <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>UMKM</th>
                        <th>No Rekening</th>
                        <th>Barang</th>
                        <th>Jumlah</th>                        
                        <th>Tanggal Pesan</th>
                        <th>Total Biaya</th>
                        <th>No Resi</th>
                        <th>Aksi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
                <tbody>
            <?php 
            include '../config/koneksi.php';
            $no = 1;
           
            $sql = "SELECT  tb_umkm.id_umkm,
                            tb_umkm.nama_umkm,
                            tb_rekening.no_rekening,
                            tb_pesan.id_pesan,
                            tb_barang.id_barang,
                            tb_barang.nama_barang,
                            tb_pesan.tanggal_pesan,
                            tb_detail_pesan.jumlah_pesan,
                            tb_detail_pesan.sub_total,
                            tb_pesan.total_biaya,
                            tb_pembayaran.id_pembayaran,
                            tb_pembayaran.no_resi
                    FROM tb_umkm, tb_rekening, tb_pesan, tb_barang, tb_detail_pesan, tb_pembayaran
                    WHERE tb_umkm.id_umkm = tb_barang.id_umkm
                    AND tb_umkm.id_umkm = tb_rekening.id_umkm
                    AND tb_pesan.id_pesan = tb_pembayaran.id_pesan
                    AND tb_pesan.id_pesan = tb_detail_pesan.id_pesan
                    AND tb_barang.id_barang = tb_detail_pesan.id_barang
                    AND tb_pembayaran.no_resi !=''
                    AND tb_pembayaran.status ='1'";
            
            $result = $koneksi->query($sql);
            ?>

                <?php while ($row= $result->fetch_array()) {  ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['nama_umkm']; ?></td>
                    <td><?php echo $row['no_rekening']; ?></td>
                    <td><?php echo $row['nama_barang']; ?></td>                    
                    <td><?php echo $row['jumlah_pesan']; ?></td>
                    <td><?php echo $row['tanggal_pesan']; ?></td>
                    <td><?php echo $row['total_biaya']; ?></td> 
                    <td><?php echo $row['no_resi']; ?></td> 
                    <td>
                        <button type="submit" name="submit1" class="btn btn-warning" value="<?php echo $row['id_pembayaran']; ?>">
                            <i class="fa fa-warning fa-fw"></i>Tidak Valid
                        </button>
                    </td>
                    <td>
                        <button type="submit" name="submit" class="btn btn-danger" value="<?php echo $row['id_pembayaran']; ?>">
                            <i class="fa fa-trash fa-fw"></i>HAPUS
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