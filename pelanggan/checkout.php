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
        <h2>Checkout</h2>
        <hr>
        <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
               <b> Checkout Pesanan</b>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form">
                            <div class="form-group">
                                <label>Nama</label>
                                <div class="form-inline">
                                <input class="form-control" placeholder="Fist Nama" name="nama" type="text" >
                                <input class="form-control" placeholder="Last Nama" name="nama" type="text" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <label>No Handphone</label>
                                <input class="form-control" placeholder="Nomor" name="nama" type="text" >
                            </div>
                            <div class="form-group">
                                    <div class="form-group">
                                    <label>Provinsi</label>
                                    <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    </select>
                                    </div>
                                </div>
                            <div class="form-group">
                                    <label>Kota</label>
                                    <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    </select>
                                </div>
                                
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="3" placeholder="Alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Notes</label>
                                <textarea class="form-control" rows="3" ></textarea>
                            </div>
                            <div class="form-group">
                                <button href="#" type="submit" class="btn btn-info" >  Konfirmasi Pembayaran  </button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- end row -->
<?php } ?>