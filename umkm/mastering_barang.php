<!-- row -->
<div class="row">
    <div class="col-lg-12">
    <h2><b>Daftar Product </b></h2>
    <hr>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">

        <div class="box box-primary">
                          
        <div class="box-body table-responsive">

          <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Product</th>
                        <th>Nama Product</th>
						<th>Gambar</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Harga/Pcs</th>
                        <th>Aksi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

            <?php 
            include '../config/koneksi.php';
            $no = 1;
			session_start();
			$id_umkm = $_SESSION['id_umkm'];

            $sql = "SELECT * FROM tb_barang, tb_kategori WHERE tb_barang.id_kategori = tb_kategori.id_kategori AND id_umkm = '$id_umkm'";
            
            $result = $koneksi->query($sql);
            ?>
            <a href="index.php?halaman=tambah_barang">
            <button type="button" class="btn btn-default">
            <span class="glyphicon glyphicon-plus"></span> Tambah
            </button>
            </a>
            <br><br>

                <?php while ($row= $result->fetch_array()) {  ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['id_barang']; ?></td>
                    <td><?php echo $row['nama_barang']; ?></td>
					<td><?php echo "<img src='../img/dagangan_UMKM/".$row['gambar_barang']."' width='100px' height='100px'/>"; ?></td>
                    <td><?php echo $row['nama_kategori']; ?></td>
                    <td><?php echo $row['jumlah_stok']; ?></td>
                    <td><?php echo $row['harga_barang']; ?></td>
                    <td>
                        <a href="index.php?halaman=edit_barang&&id_barang=<?php echo $row['id_barang']; ?>" class="btn btn-warning">
                            <span class="glyphicon glyphicon-edit"></span> Edit 
                        </a>
                    </td>
                    <td>               
                        <a href="index.php?halaman=hapus_barang&&id_barang=<?php echo $row['id_barang']; ?>" 
							onClick="return confirm('Data Akan Dihapus !')" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash"></span> Hapus
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