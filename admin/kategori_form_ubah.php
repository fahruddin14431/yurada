<?php 

include '../config/koneksi.php';

// get id from url 
$id_kategori = $_GET['id_kategori'];
$sql = "SELECT * FROM tb_kategori WHERE id_kategori=$id_kategori";
$result = $koneksi->query($sql);
$row = $result->fetch_array();
$id_kategori = $row['id_kategori'];
$nama_kategori = $row['nama_kategori'];

 ?>
<!-- row -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Kategori Barang UMKM YURADA.com</h1>
        <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
               <b> Kategori </b>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="POST" action="kategori_ubah_proses.php">
                            <div class="form-group">
                                <label>ID</label>
                                <input class="form-control" value="<?php echo $id_kategori; ?>" name="id_kategori" maxlength="5" type="text" readonly required>
                            </div>
                            <div class="form-group">
                                <label>Nama Kategorik</label>
                                <input class="form-control" value="<?php echo $nama_kategori; ?>" placeholder="Nama Kategori" name="nama_kategori" maxlength="25" type="text" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-success" >  Simpan  </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->