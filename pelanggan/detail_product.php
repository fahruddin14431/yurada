<!-- row -->
<?php 
include 'config/koneksi.php';
$id_barang =  $_GET['id_barang'];
$sql = "SELECT tb_barang.nama_barang, tb_barang.jumlah_stok, tb_barang.spesifikasi_barang, tb_barang.gambar_barang, tb_kategori.nama_kategori FROM tb_barang, tb_kategori WHERE tb_barang.id_kategori=tb_kategori.id_kategori AND id_barang='$id_barang'";
$detail = $koneksi->query($sql);
while ($row= $detail->fetch_array()) { 
 ?>
<!--row-->
<div class="row">

<h3 class="page-header"><b>Detail Product</b></h3>        
        <div class="row">
            <div class="col-lg-4">
                
                <img src="<?php echo "img/dagangan_UMKM/".$row['gambar_barang']; ?>" width="350px" height="320px">
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
                                <label> Nama Barang</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                                <?php echo $row['nama_barang']; ?>
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
                                <?php echo $row['nama_kategori']; ?>
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
                                <?php echo $row['jumlah_stok']; ?>
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
                                <?php echo $row['spesifikasi_barang']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                                <div class="form-group">
                                <button href="index.php?halaman=checkout" type="submit" class="btn btn-info" > Beli Product </button>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                <button href="index.php?halaman=shoppingcart" type="submit" class="btn btn-info" > Shopingcart </button>
                                </div>
                            </td>
                        </tr>
                    </table>
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
<!-- end row -->