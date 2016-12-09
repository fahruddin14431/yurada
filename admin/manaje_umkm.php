<!-- row -->
<div class="row">
    <div class="col-lg-12">
    <h2 class="page-header"><b> Daftar UMKM  Dalam Situs</b></h2>

    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <div class="box box-primary">
                          
        <div class="box-body table-responsive">

        <form action="manaje_umkm_proses.php" method="GET">
        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id UMKM</th>
                        <th>Nama UMKM</th>
                        <th>Pemilik</th>
                        <th>Alamat UMKM</th>
                        <th>Deskripsi</th>
                        <th>No.Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

            <?php 
            include '../config/koneksi.php';
            $no = 1;
           
            $sql = "SELECT * FROM tb_umkm WHERE status='1'";
            
            $result = $koneksi->query($sql);
            ?>

                <?php while ($row= $result->fetch_array()) {  ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['id_umkm']; ?></td>
                    <td><?php echo $row['nama_umkm']; ?></td>
                    <td><?php echo $row['nama_pemilik']; ?></td>
                    <td><?php echo $row['alamat_umkm']; ?></td>
                    <td><?php echo $row['deskripsi_umkm']; ?></td>
                    <td><?php echo $row['no_telfon']; ?></td>
                    <td>
                        <button type="submit" name="submit" class="btn btn-danger" value="<?php echo $row['id_umkm']; ?>">
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