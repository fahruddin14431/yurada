<?php 

session_start();
if (empty($_SESSION['id_pelanggan']) AND empty($_SESSION['id_admin'])) { ?>
   
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
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Tracking</h3>
            </div>
            <div class="panel-body">
                <form role="form">
                    <fieldset>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                        </div>
                        <div class="form-group">
                            <label> No.Resi </label>
                            <input class="form-control" placeholder="Resi" name="resi" type="text">
                        </div>
                        <div class="form-group">
                        </div>
                        <a href="#" class="btn btn-lg btn-success btn-block">Lacak</a><br>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<?php } ?>