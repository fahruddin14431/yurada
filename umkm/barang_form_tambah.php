<?php
	include '../config/koneksi.php';
	//error_reporting(0);
	session_start();
	$id_umkm = $_SESSION['id_umkm'];    
    
	//mengambil 3 digit ID terakhir UMKM
	$getUMKM = substr($id_umkm, -3);	
	
	// getmax id_barang berdasarkan kategori
    $id_kategori = isset($_GET['id'])?$_GET['id']:'';    

    // kode otomatis
    if (empty($id_kategori)){
        $carikode = mysqli_query($koneksi, "SELECT MAX(id_barang) FROM tb_barang") or die (mysql_error());
    }else{
        $carikode = mysqli_query($koneksi, "SELECT MAX(id_barang) FROM tb_barang 
		WHERE id_kategori = $id_kategori AND id_umkm = '$id_umkm'") or die (mysql_error());
		
    }
    $datakode = mysqli_fetch_array($carikode);
   
    if ($datakode) {
	
		$idBarang = "SELECT id_barang FROM tb_barang WHERE id_kategori = $id_kategori
        AND id_umkm = '$id_umkm'";
		$hasil = $koneksi->query($idBarang);
		
		$barang = mysqli_fetch_array($hasil);
		
		if (empty($barang)){
			$getMax = "101";
		}else{
			// index field pertama
			$nilaikode = substr($datakode[0],0);
			// ambil 2 digit terakhir 
			$getMax = substr($nilaikode, 8) ;
			// data terbesar +1
			$getMax+=1 ;
		}
    } else {
        $getMax = "1111";
    }

      $id_kategori =="" ? $id_otomatis = '' : $id_otomatis = $id_kategori.$getMax;
?>

<!-- mengambil kode kategori barang dari option select -->
<script type="text/javascript">
    function getval (sel) {
        var kategori_id = sel.value;
        window.location.href = "index.php?halaman=tambah_barang&&id=" + kategori_id;
    }
</script>

<!-- row -->
<div class="row">
    <div class="col-lg-12">
    <h2 class="page-header"><b>Tambah Daftar Product </b></h2>
    <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="barang_form_tambah_proses.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Kode Barang</label>
                                <input type="text" class="form-control"  name="kode_barang" placeholder="Kode Barang" 
								value="<?php echo "BRG".$getUMKM.$id_otomatis; ?>" readonly required/>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategori_barang" onChange="getval(this);" size="1" class="form-control" required>
                                <option value="">-- Pilih Kategori Barang --</option>
                                <?php //query untuk looping kategori
									$sql = "SELECT * FROM tb_kategori";
									$result = $koneksi->query($sql);
									while ($row = $result->fetch_array()){
										$status = $id_kategori==$row['id_kategori']?'selected':''; ?>
										<option <?php echo $status; ?> value="<?php echo $row['id_kategori'] ?>">
											<?php echo $row['nama_kategori']; ?>
										</option>
								<?php } ?>
                                </select>
                            </div>
							<div class="form-group">
                                <label>Nama Barang</label>
                                <input class="form-control" placeholder="Nama Barang" name="nama_barang" type="text" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Stok</label><br>
                                <input class="form-control" placeholder="Stok" name="stok" type="text" required>
                            </div>
                            <div class="form-group">
                                <label>Harga Product/Pcs</label><br>
                                <input class="form-control" placeholder="Harga/Pcs" name="harga" type="text" required>
                            </div>
                            <div class="form-group">
                                <label>Detail Product</label>
                                <textarea class="form-control" rows="3" name="detail" required > </textarea>
                            </div>
                            <div class="form-group">
                                <label>Gambar Product</label>
                                <input class="form-control" placeholder="gambar" name="gambar" type="file">
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