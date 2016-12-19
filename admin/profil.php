<?php 
$id_admin = $_SESSION['id_admin'];
$sql = "SELECT * FROM tb_admin WHERE id_admin = '$id_admin'";
$result = $koneksi->query($sql);
$row = $result->fetch_array();
$id = $row['id_admin'];
$nama = $row['nama_admin'];
$alamat = $row['alamat'];
$no_telp = $row['no_telfon'];
$email = $row['email'];
$no_rek = $row['no_rekening'];

 ?>

<!-- row -->
<div class="row">
    <div class="col-lg-12">
        <h2>Profil Admin YURADA.com</h2>
        <hr>
        <div class="col-lg-4">
            <img src="../img/user.png" height="250" width="250">
        </div>
        <div class="col-lg-8">

            <!-- panel info -->
            <div class="panel-info">
                <div class="panel-heading"><b>Profil Anda</b>
                </div>
                <div class="page-body">
                    <form action="profil_direct.php" method="GET">
                    <table class="table table-hover">
                        <tr>
                            <td>
                                <label> ID Admin</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                                <label><?php echo $id; ?></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label> Nama</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                                <label><?php echo $nama; ?></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label> Alamat</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                                <label><?php echo $alamat; ?></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>No Telfon</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                                <label><?php echo $no_telp; ?></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                                <label><?php echo $email; ?></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>No Rekening</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                                <label><?php echo $no_rek; ?></label>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /panel info -->
            <button type="submit" name="submit" value="<?php echo $id ?>" class="btn btn-warning"><i class="fa fa-pencil-square fa-fw"></i>UBAH</button>
            <!-- <a href="index.php?profil_form_ubah&id_admin='<?php echo $id; ?>'" class="btn btn-warning">UBAH</a> -->
            </form>
        </div>
    </div>
</div>
<!-- end row -->