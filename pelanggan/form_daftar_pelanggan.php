<?php include 'config/koneksi.php'; ?>

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

<!-- row -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Daftar Jadi Konsumen Gratis!!</h1>
        <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
               <b> DAFTAR </b>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="POST" action="pelanggan/daftar_pelanggan.php">
                            <div class="form-group">
                                <label>Nama</label>
                                <div class="form-inline">
                                <input class="form-control" placeholder="Nama Depan" name="nama_depan" maxlength="25" type="text" autofocus required>
                                <input class="form-control" placeholder="Nama Belakang" name="nama_belakang" maxlength="25" type="text" required>
                                </div>
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
                                <input class="form-control" placeholder="Alamat" name="alamat" type="text" required>
                            </div>                            
                            <div class="form-group">
                                <label>No Telfon</label>
                                <input class="form-control" placeholder="Nomor" name="no_telfon" maxlength="12" type="tel" required>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" placeholder="E-mail" name="email" type="email" required>
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi</label>
                                <input class="form-control" placeholder="Kata Sandi" name="kata_sandi" type="password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info" >  Daftar  </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->