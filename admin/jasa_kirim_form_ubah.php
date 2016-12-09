<?php 

include '../config/koneksi.php';

// get id from url 
$id_jasa_kirim = $_GET['id_jasa_kirim'];
$sql = "SELECT * FROM tb_jasa_pengiriman WHERE id_jasa_pengiriman=$id_jasa_kirim";
$result = $koneksi->query($sql);
$row = $result->fetch_array();
$id_jasa_pengiriman = $row['id_jasa_pengiriman'];
$nama_jasa_pengiriman = $row['nama_jasa_pengiriman'];

 ?>
<!-- row -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Kategori Barang UMKM YURADA.com</h1>
        <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
               <b> Jasa Pengiriman </b>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="POST" action="jasa_kirim_ubah_proses.php">
                            <div class="form-group">
                                <label>ID</label>
                                <input class="form-control" value="<?php echo $id_jasa_pengiriman; ?>" name="id_jasa_kirim" maxlength="5" type="text" readonly required>
                            </div>
                            <div class="form-group">
                                <label>Nama Kategorik</label>
                                <input class="form-control" value="<?php echo $nama_jasa_pengiriman; ?>" placeholder="Nama Jasa Pengiriman" name="nama_jasa_kirim" maxlength="20" type="text" required>
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