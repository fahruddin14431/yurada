<!-- row -->
<?php
session_start(); 
include 'config/koneksi.php';
 ?>
<div class="row"><br>
    <div class="col-lg-12">
        <div class="col-lg-12">
            <div class="panel panel-green">
                 <div class="sd-content sd-section" style="max-width:100%">
                   <img class="mySlides" src="img/bm.png" style="width:100%" >
                   <img class="mySlides" src="img/bm2.png" style="width:100% ">
                 </div>

                    <script>
                    var myIndex = 0;
                    carousel();

                    function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        for (i = 0; i < x.length; i++) {
                           x[i].style.display = "none";  
                        }
                        myIndex++;
                        if (myIndex > x.length) {myIndex = 1}    
                        x[myIndex-1].style.display = "block";  
                        setTimeout(carousel, 2000); // Change image every 2 seconds
                    }
                    </script>
            </div>
        </div>
        <?php 

            $sql = "SELECT tb_barang.gambar_barang, tb_barang.id_barang, count(tb_detail_pesan.jumlah_pesan) from tb_barang, tb_detail_pesan where tb_barang.id_barang = tb_detail_pesan.id_barang group by tb_detail_pesan.id_barang desc limit 5 ";
            $kategori = $koneksi->query($sql);
         while ( $hasil = $kategori->fetch_array()) {?>
        <div class="col-lg-3">
            <div class="panel panel-green" align="center">
                <div class="panel-footer">
                    <img src="<?php echo "img/dagangan_UMKM/".$hasil['gambar_barang'];?>" width="200" height="200">
                </div>
                <div class="panel-footer">
                    <a href="index.php?halaman=detail_product&&id_barang=<?php echo $hasil['id_barang'] ?>" style="text-decoration:none"><i class="fa fa-tags fa-fw"></i> Detail Produk </a>
                    <a href="index.php?halaman=shoppingcart&&id_barang=<?php echo $hasil['id_barang'] ?>" style="text-decoration:none"><i class="fa fa-shopping-cart fa-fw"></i> Beli Sekarang </a>
                </div>
            </div>
        </div>
        <?php };
        ?>
    
    </div>
</div>
<!-- end row