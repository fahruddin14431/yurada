<!-- row -->
<div class="row">
    <div class="col-lg-12">
    <h2><b> Daftar Jasa Pengiriman Barang </b></h2>
    <hr>

    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <div class="box box-primary">
                          
        <div class="box-body table-responsive">

            <form action="jasa_kirim_delete_proses.php" method="GET">
            <table id="tabel-data" class="table tables-nowrap table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Jasa Pengiriman</th>
                        <th>Nama Jasa Pengiriman</th>
                        <th>Aksi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

            <?php 
            include '../config/koneksi.php';
            $no = 1;
           
            $sql = "SELECT * FROM tb_jasa_pengiriman";
            
            $result = $koneksi->query($sql);
            ?>

            <a href="index.php?halaman=tambah_jasa_kirim">
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-plus"></span> Tambah
                </button>
            </a>
            <br><br>

                <?php while ($row= $result->fetch_array()) {  ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['id_jasa_pengiriman']; ?></td>
                    <td><?php echo $row['nama_jasa_pengiriman']; ?></td>
                    <td>
                        <button type="submit" name="submit1" class="btn btn-warning" value="<?php echo $row['id_jasa_pengiriman']; ?>">
                            <i class="fa fa-pencil-square fa-fw"></i>UBAH
                        </button>
                    </td>
                    <td>
                        <button type="submit" name="submit" class="btn btn-danger" value="<?php echo $row['id_jasa_pengiriman']; ?>">
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