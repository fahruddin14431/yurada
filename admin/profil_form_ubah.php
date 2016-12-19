<?php 

   $id_admin = $_SESSION['id_admin'];
   $sql = "SELECT * FROM tb_admin WHERE id_admin='$id_admin'";
   $result = $koneksi->query($sql);
   $row = $result->fetch_array();

   $id = $row['id_admin'];
   $nama = $row['nama_admin'];
   $no_telfon = $row['no_telfon'];
   $email = $row['email'];
   $no_rek = $row['no_rekening'];

 ?>
<!-- row -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">ADMINISTRATOR</h1>
        <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
               <b> Ubah Data Administrator </b>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="POST" action="profil_ubah_proses.php">
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" value="<?php echo $nama; ?>" name="nama" maxlength="50" type="text" required>
                            </div>
                            <div class="form-group">
                                <label>No Telfon</label>
                                <input class="form-control" value="<?php echo $no_telfon; ?>" placeholder="No Telfon" name="no_telfon" maxlength="12" type="tel" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" value="<?php echo $email; ?>" placeholder="Email" name="email" maxlength="50" type="email" required>
                            </div>
                            <div class="form-group">
                                <label>No Rekening</label>
                                <input class="form-control" value="<?php echo $no_rek; ?>" placeholder="No Rekening" name="no_rek" maxlength="50" type="text" required>
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi</label>
                                <input class="form-control" value="<?php echo $no_rek; ?>" placeholder="No Rekening" name="no_rek" maxlength="50" type="text" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" value="<?php echo $id; ?>" class="btn btn-success" >  Simpan  </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->