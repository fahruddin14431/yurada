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
        <h1 class="page-header">Peyment</h1>
        
    </div>
</div>
<!-- end row -->
<?php } ?>