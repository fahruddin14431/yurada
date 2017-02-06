<?php 
$id_umkm = $_SESSION['id_umkm'];
$sql = "SELECT * FROM tb_umkm WHERE id_umkm = '$id_umkm'";
$result = $koneksi->query($sql);
$row = $result->fetch_array();
$id = $row['id_umkm'];
$nama = $row['nama_umkm'];
$pemilik = $row['nama_pemilik'];
$email = $row['email'];
$telp = $row['no_telfon'];
$alamat = $row['alamat_umkm'];
$deskripsi = $row['deskripsi_umkm'];

?>

<!-- row -->
<div class="row">
    <div class="col-lg-12">
        <h2>Profil UMKM</h2>
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
                    <form action="profil_ubah_proses.php" method="POST">
                    <table class="table table-hover">
                        <tr>
                            <td>
                                <label>ID UMKM</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                                <input name="id" value="<?php echo $id; ?>" readonly="" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Nama</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                                <input name="nama" value="<?php echo $nama; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Pemilik</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                                <input name="pemilik" value="<?php echo $pemilik; ?>" class="form-control" required>
                            </td>
                        </tr>
						<tr>
                            <td>
                                <label>Alamat</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                                <input name="alamat" value="<?php echo $alamat; ?>" class="form-control" required>
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
                                <input name="email" value="<?php echo $email; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Telepon</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                                <input name="telp" value="<?php echo $telp; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Deskripsi</label>
                            </td>
                            <td>
                                <label> : </label>
                            </td>
                            <td>
                                <input name="deskripsi" value="<?php echo $deskripsi; ?>" class="form-control" required>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /panel info -->
            <button type="submit" name="submit" value="<?php echo $id ?>" class="btn btn-warning"><i class="fa fa-pencil-square fa-fw"></i>UBAH</button>
            <a href="index.php?home&id_admin='<?php echo $id; ?>'" class="btn btn-info">Kembali</a>
            </form>
        </div>
    </div>
</div>
<!-- end row -->