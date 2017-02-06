<?php 

$id_pelanggan = $_SESSION['id_pelanggan'];
?>
<!-- row -->
<div class="row">
    <div class="col-lg-12">
        <h2>Shopping Cart</h2>
        <hr>
        <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Shopping Cart Anda
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Barang</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    $sql = "SELECT * FROM shoppingcart WHERE id_pelanggan='$id_pelanggan'";
                                    $kategori = $koneksi->query($sql);
                                     while ( $hasil = $kategori->fetch_array()) {?>
                                        <tr>
                                            <td><?php echo $hasil['nama_barang']; ?></td>
                                            <td><?php echo $hasil['harga']; ?></td>
                                            <td><?php echo $hasil['jumlah']; ?></td>
                                            <td><?php echo $hasil['tagihan']; ?></td>
                                    <td>               
                                        <a href="index.php?halaman=hapus_data&id_barang=<?php echo $hasil['id_barang']; ?>" 
                                            onClick="return confirm('Data Akan Dihapus !')" class="btn btn-danger">
                                            <span class="glyphicon glyphicon-trash"></span> Hapus
                                        </a>
                                    </td>
                                        </tr>
                                        <?php
                                                }
                                        $sql1 = "SELECT SUM(tagihan) as jumlah_tagihan FROM shoppingcart WHERE id_pelanggan='$id_pelanggan'";
                                        $kamu = $koneksi->query($sql1);
                                        $hasil1 = $kamu->fetch_array();
                                        $total = $hasil1['jumlah_tagihan'];
                                        $_SESSION['tagihan'] = $total;
                                         ?>
                                        <tr>
                                            <td colspan="3" align="right">Total Tagihan</td>
                                            <td colspan="2"><?php echo $total; ?></td>
                                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-md-offset-10">
            <a href="../index.php?halaman=checkout_proses&&jumlah_tagihan=<?php echo $hasil1['jumlah_tagihan']; ?>"class="btn btn-info">Checkout
                                        </a>

    </div>

    </div>
</div>