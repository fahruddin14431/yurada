<!-- row -->
<div class="row">
    <div class="col-lg-12">
    <h2 class="page-header"><b> Detail Product UMKM </b></h2>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="well">             

                    <?php 
                    include '../config/koneksi.php';

                    $id_barang = $_GET['id_barang'];
                    $sql = "SELECT * FROM tb_barang, tb_kategori, tb_umkm
                            WHERE tb_barang.id_kategori = tb_kategori.id_kategori
                            AND tb_barang.id_umkm = tb_umkm.id_umkm
                            AND id_barang=$id_barang";            
                    $result = $koneksi->query($sql);
                    ?>

                    <form action"validasi_barang_delete_proses.php" method="GET">
                        <?php while ($row= $result->fetch_array()) {  ?>
                        <ul class="list-group">
                            <li class="list-group-item">ID : <?php echo $row['id_barang']; ?></li>
                            <li class="list-group-item">Nama : <?php echo $row['nama_barang']; ?></li>
                            <li class="list-group-item">Gambar : <?php echo $row['gambar_barang']; ?></li>
                            <li class="list-group-item">Harga : <?php echo $row['harga_barang']; ?></li>
                            <li class="list-group-item">Spesifikasi : <?php echo $row['spesifikasi_barang']; ?></li>
                            <li class="list-group-item">Kategori : <?php echo $row['nama_kategori']; ?></li>
                            <li class="list-group-item">UMKM : <?php echo $row['nama_umkm']; ?></li>
                            <br>
                            <button type="submit" name="submit1" class="btn btn-danger" value="<?php echo $row['id_barang']; ?>">
                                <i class="fa fa-trash fa-fw"></i>HAPUS
                            </button>                                            
                        </ul>
                        <?php } ?>
                    </form>

                </div>   
                <!-- ends well -->
            </div>
            <!-- ends col-lg-12 -->
        </div>
        <!-- ends row -->
    </div>
    <!-- ends container-fluid -->
</div>
</div>
<!-- end row -->