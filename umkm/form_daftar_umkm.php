<?php include 'config/koneksi.php'; ?>

<script type="text/javascript">
$(document).ready(function(){
    $('#propinsi').on('change',function(){
        var propinsi_id = $(this).val();
        if(propinsi_id){
            $.ajax({
                type:'GET',
                url:'umkm/ajax_kota.php',
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
        <h1 class="page-header">Daftarkan UMKM mu Gratis!!</h1>
        <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
               <b> DAFTAR </b>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="POST" action="umkm/daftar_umkm.php">
                            <div class="form-group">
                                <label>Nama UMKM</label>
                                <input class="form-control" placeholder="Nama" name="nama_umkm" maxlength="50" type="text" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Nama Pemilik</label>
                                <div class="form-inline">
                                <input class="form-control" placeholder="Nama Depan" name="nama_depan" maxlength="25" type="text" required>
                                <input class="form-control" placeholder="Nama Belakang" name="nama_belakang" maxlength="25" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Provinsi</label>
                                <select name="propinsi" id="propinsi" class="form-control" required>
                                    <option value="">-- Pilih Provinsi --</option>
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
                                    <option value="">-- Pilih Kota --</option>
                                        
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control" placeholder="Alamat" name="alamat" type="text" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" placeholder="Email" name="email" maxlength="50" type="email" required>
                            </div>
                            <div class="form-group">
                                <label>No Telfon</label>
                                <input class="form-control" placeholder="No Telfon" name="no_telfon" maxlength="12" type="tel" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" rows="10" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Pilih Jasa Pengiriman</label>
                                <br>
                                <?php 

                                $sql = "SELECT * FROM tb_jasa_pengiriman";
                                $result = $koneksi->query($sql);
                                while ($row = $result->fetch_array()) {
            
                                 ?>
                                <label class="checkbox-inline"><input type="checkbox" name="id_jasa[]" value="<?php echo $row['id_jasa_pengiriman']; ?>"><?php echo $row['nama_jasa_pengiriman']; ?></label>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Bank</label>
                                <select name="id_bank" class="form-control" required>
                                    <option>--Pilih Bank--</option>
                                        <?php
                                        //mengambil nama-nama bank yang ada di database
                                        $result = $koneksi->query("SELECT * FROM tb_bank");
                                        while ($row = $result->fetch_array()){ ?>
                                            <option value="<?php echo $row['id_bank'] ?>"><?php echo $row['nama_bank']; ?></option>
                                        <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>No Rekening</label>
                                <input class="form-control" placeholder="No Rekening" name="no_rek" type="text" required>
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi</label>
                                <input class="form-control" placeholder="Kata Sandi" name="kata_sandi" type="password" maxlength="50" required>
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