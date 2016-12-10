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

        <form action="#" method="GET">
        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pembayaran</th>
                        <th>ID Pesan</th>
                        <th>ID Pelanggan</th>
                        <th>Tanggal</th>
                        <th>Total Transaksi</th>
                        <th>Bukti Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

            <?php 
            include '../config/koneksi.php';

            $no = 1;           
            $sql = "SELECT * FROM tb_barang, tb_kategori, tb_umkm
                    WHERE tb_barang.id_kategori = tb_kategori.id_kategori
                    AND tb_barang.id_umkm = tb_umkm.id_umkm";            
            $result = $koneksi->query($sql);
            ?>

                <?php while ($row= $result->fetch_array()) {  ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['id_barang']; ?></td>
                    <td><?php echo $row['nama_barang']; ?></td>
                    <td><?php echo $row['gambar_barang']; ?></td>
                    <td><?php echo $row['nama_kategori']; ?></td>
                    <td><?php echo $row['nama_umkm']; ?></td>
                    <td>Gambar</td>
                    <td>
                        <button type="submit" name="submit" class="btn btn-success" value="<?php echo $row['id_barang']; ?>">
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