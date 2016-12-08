<!-- row -->
<div class="row">
    <div class="col-lg-12">
    <h2 class="page-header"><b> Validasi Kategori Barang UMKM </b></h2>

    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <div class="box box-primary">
                          
        <div class="box-body table-responsive">

          <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Kategori</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

            <?php 
            include '../config/koneksi.php';
            $no = 1;
           
            $sql = "SELECT * FROM tb_kategori";
            
            $result = $koneksi->query($sql);
            ?>

                <?php while ($row= $result->fetch_array()) {  ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['id_kategori']; ?></td>
                    <td><?php echo $row['nama_kategori']; ?></td>
                    <td><a href="" class="btn btn-default">
                    <span class="glyphicon glyphicon-check"></span> ACC </a>
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