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

<script type="text/javascript">
$(document).ready(function(){
    $('#propinsi').on('change',function(){
        var propinsi_id = $(this).val();
        if(propinsi_id){
            $.ajax({
                type:'GET',
                url:'pelanggan/ajax_kota.php',
                data:'propinsi_id='+propinsi_id,
                success:function(html){
                    $('#kota').html(html);
                }
            }); 
        }else{
            $('#kota').html('<option value="">--Pilih Kota--</option>');
        }
    });
    
});
</script>

<?php 
$id_pelanggan = $_SESSION['id_pelanggan'];
$sql = "SELECT * FROM tb_pelanggan WHERE id_pelanggan = '$id_pelanggan'";
$result = $koneksi->query($sql);
$row = $result->fetch_array();

$nama = $row['nama_pelanggan'];
$email = $row['email'];
$hp = $row['no_telfon'];
$alamat = $row['alamat_pelanggan'];


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
                        <form role="form" action="pelanggan/checkout_proses.php" method="POST">
                            <div class="form-group">
                                <label>Nama</label>
                                <div class="form-inline">
                                <input class="form-control" value="<?php echo $nama; ?>" type="text" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control"  value="<?php echo $hp; ?>" type="email" readonly>
                            </div>
                            <div class="form-group">
                                <label>No Handphone</label>
                                <input class="form-control" value="<?php echo $email; ?>" type="text" readonly>
                            </div>
                            <div class="form-group">
                                <label>Provinsi</label>
                                <select name="propinsi" id="propinsi" class="form-control" required>
                                    <option>--Pilih Provinsi--</option>
                                        <?php
                                        //mengambil nama-nama propinsi yang ada di database
                                        $result = $koneksi->query("SELECT * FROM tb_provinsi");
                                        while ($row = $result->fetch_array()){ ?>
                                            <option value="<?php echo $row['id_provinsi'] ?>"><?php echo $row['nama_provinsi']; ?></option>
                                        <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kota</label>
                                <select name="kota" id="kota" class="form-control" required>
                                    <option>-- Pilih Kota --</option>                                        
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Notes</label>
                                <textarea class="form-control" rows="3" name="catatan" ></textarea>
                            </div>
                            <div class="form-group">
                                <button  type="submit" class="btn btn-info" >  Konfirmasi Pembayaran  </button>
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