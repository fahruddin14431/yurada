<?php
	include '../config/koneksi.php';
	//error_reporting(0);//

	// get id from url
	$id_barang = $_GET['id_barang'];
	
	$sql = "SELECT * FROM tb_barang WHERE id_barang = '$id_barang'";
	$result = $koneksi->query($sql);
	$row = $result->fetch_array();
	
	// mengambil data dari tb_barang
	$kode_barang = $row['id_barang'];
	$nama_barang = $row['nama_barang'];
	$kategori_barang = $row['nama_kategori'];
	$stok = $row['jumlah_stok'];
	$harga = $row['harga_barang'];
	$detail = $row['spesifikasi_barang'];
	$gambar = $row['gambar_barang'];
	
?>

<!-- row -->
<div class="row">
    <div class="col-lg-12">
    <h2 class="page-header"><b>Tambah Daftar Product </b></h2>
    <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="barang_edit_proses.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Kode Barang</label>
                                <input type="text" class="form-control"  name="kode_barang" placeholder="Kode Barang" 
								value="<?php echo $kode_barang; ?>" readonly required/>
                            </div>
							<div class="form-group">
                                <label>Nama Barang</label>
                                <input class="form-control" placeholder="Nama Barang" name="nama_barang" type="text" 
								value="<?php echo $nama_barang; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategori_barang" onChange="getval(this);" size="1" class="form-control" required>
                                <?php //looping kategori
								$result1 = $koneksi->query("SELECT * FROM tb_kategori");
								while ($row1 = $result1->fetch_array()){
									$status = ($row['id_kategori']==$row1['id_kategori'])?"selected":"";?>
										<option <?php echo $status; ?> value="<?php echo $row1['id_kategori'];  ?>">
										<?php echo $row1['nama_kategori']; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Stok</label><br>
                                <input class="form-control" placeholder="Stok" name="stok" type="text" 
								value="<?php echo $stok; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Harga Product/Pcs</label><br>
                                <input class="form-control" placeholder="Harga/Pcs" name="harga" type="text" 
								value="<?php echo $harga; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Detail Product</label>
                                <input class="form-control" rows="3" name="detail" 
								value="<?php echo $detail; ?>" required />
                            </div>
							<div class="form-group">
                                <?php echo "<img src='../img/dagangan_UMKM/".$row['gambar_barang']."' width='100px' height='100px'/>"; ?>
                            </div>
                            <div class="form-group">
                                <label>Gambar Product</label>
                                <input class="form-control" placeholder="gambar" value="<?php echo $gambar; ?>" name="gambar" type="file">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info" >  Simpan  </button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
	</div>
</div>
<!-- end row -->