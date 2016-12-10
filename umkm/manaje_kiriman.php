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
                        <th>Id Pemesan</th>
                        <th>Tanggal</th>
                        <th>Jumlah Biaya</th>
                        <th>No.Resi</th>
                        <th>Jasa Pengiriman</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

            <?php 
            include '../config/koneksi.php';
            $no = 1;
            $sql = "SELECT * FROM tb_jasa_pengiriman, tb_pesan";
            
            $result = $koneksi->query($sql);
            ?>

                <?php while ($row= $result->fetch_array()) {  ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['id_pesan']; ?></td>
                    <td><?php echo $row['id_pelanggan']; ?></td>
                    <td><?php echo $row['tanggal_pesan']; ?></td>
                    <td><?php echo $row['jumlah_pesan']; ?></td>
                    <td><?php echo $row['no_resi']; ?></td>
                    <td><?php echo $row['nama_jasa_pengiriman']; ?></td>
                    <td><a href="" class="btn btn-default">
                    <span class="glyphicon glyphicon-edit"></span> Ubah </a>
                    </td>
                    <td><a href="" class="btn btn-default">
                    <span class="glyphicon glyphicon-edit"></span> Edit </a>
                    <a href="" onClick="return confirm('Data Akan Dihapus !')" class="btn btn-default">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</a>
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