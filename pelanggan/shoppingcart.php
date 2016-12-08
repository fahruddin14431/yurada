<?php 

session_start();
if (empty($_SESSION['id_pelanggan'])) { ?>
   
    <div class="col-lg-12">
        <br>
        <h1 style="color:red"><b>Akses Ditolak</b></h1>
        <hr>
        <h3>Silahkan <a href="index.php?halaman=login">Login</a> untuk menggunakan fitur ini</h3>
    </div>

<?php 

}else{

?>
<!-- row -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Shopping Cart</h1>
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
                                <th>Detail Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>foto</td>
                                <td>kalung</td>
                                <td>2</td>
                                <td>2500</td>
                                <td>5000</td>
                                <td>ulangi pesanan/batal</td>
                            </tr>
                            <tr>
                                <td colspan="4" align="right">Jumlah</td>
                                <td colspan="2">Rp...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- end row -->

<?php } ?>