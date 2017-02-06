<?php
$id_barang = $_GET['id_barang'];
$_SESSION['id_barang'] = $_GET['id_barang'];;
$sql = "SELECT tb_barang.id_barang, tb_barang.nama_barang, tb_barang.harga_barang, tb_barang.jumlah_stok, tb_barang.spesifikasi_barang, tb_barang.gambar_barang, tb_kategori.nama_kategori FROM tb_barang, tb_kategori WHERE tb_barang.id_kategori=tb_kategori.id_kategori AND id_barang='$id_barang'";
$detail = $koneksi->query($sql);
while ($row= $detail->fetch_array()) { 
?>
<div class="row">
<h3 class="page-header"><b>Detail Product</b></h3>        
<!--row-->
        <div class="row">
            <div class="col-lg-4">
                
                <img src="<?php  echo "img/dagangan_UMKM/".$row['gambar_barang'];?>" width="330" height="350">

            </div>

            <div class="col-lg-8">
                <!-- panel info -->            
                <div class="panel-info">
                <div class="panel-heading"><b>Detail Produk</b>
                </div>
                <div class="page-body">
                    <table class="table table-hover">
                    <tr>
                            <td>
                                <label> ID Barang</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                            <input type="text" name="id_barang" value="<?php echo $row['id_barang']; ?>" disabled />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label> Nama Barang</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                            <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" disabled />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label> Kategori</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                            <input type="text" name="kategori_barang" value="<?php echo $row['nama_kategori']; ?>" disabled />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> Harga</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                            <input type="text" value="<?php echo $row['harga_barang']; ?>" disabled />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> Jumlah Stok</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                            <input type="text" name="jumlah" value="<?php echo $row['jumlah_stok']; ?>" disabled />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label> Spesifikasi</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                                <input type="text" name="spesifikasi" value="<?php echo $row['spesifikasi_barang']; ?>" disabled />
                            </td>
                        </tr>
                        <form method="POST" action="pelanggan/shopping_proses.php" >
                        <tr>
                            <td>
                                <label> Jumlah Anda Pesan</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                                <input type="text" name="jumlah_pesan" value="" placeholder="Jumlah" required="" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                                <div class="form-group">
                                <input type="submit" value="Beli Product" name="beli" class="btn btn-info"></input>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                <button type="submit" class="btn btn-info" >  Shopping Cart  </button>
                                <!-- <a href="index.php?halaman=shoppingcart&id=<?php echo $row['id_barang'] ?>" class="btn btn-info">Shopping Cart</a> -->
                                </div>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
            <!-- /panel info -->
          </div>
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-12">
                <h6 class-"page-header">Testimoni</h6>
                <div class="form-group">
                    <label>Komentar : </label>
                    <textarea class="form-control" rows="3" placeholder="Komentar"></textarea>
                </div>
                <div class="panel penel-green">
                    <p>email</p> <br>
                    <p>isi komentar</p>
                </div>
            </div>           
        </div>  

    </div>
</div>
<?php } ?>
<!-- end row