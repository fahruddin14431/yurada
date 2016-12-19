<!-- row -->
<?php
$ambil_kategori =  $_GET['ambil_kategori'];
 ?>
<div class="row">
    <div class="col-lg-12">
        <h2>List Product</h2>
        <hr>
        
        <?php 

            $sql = "SELECT * FROM tb_barang WHERE id_kategori='$ambil_kategori'";
            $kategori = $koneksi->query($sql);

        ?>
        <?php while ( $hasil = $kategori->fetch_array()) {?>
        <div class="col-lg-3">
            <div class="panel panel-green" align="center">
                <div class="panel-footer">
                    <img  src="<?php echo "img/dagangan_UMKM/".$hasil['gambar_barang'];?>" width="200" height="200">
                </div>
                <div class="panel-footer">
                    <a href="index.php?halaman=detail_product&&id_barang=<?php echo $hasil['id_barang'] ?>" style="text-decoration:none"><i class="fa fa-tags fa-fw"></i> Detail Produk </a>
                    <a href="index.php?halaman=shoppingcart&&id_barang=<?php echo $hasil['id_barang'] ?>" style="text-decoration:none"><i class="fa fa-shopping-cart fa-fw"></i> Beli Sekarang </a>
                </div>
            </div>
        </div>
        <?php }; ?>
</div>
<!-- end row -->
