<?php 

error_reporting(0);
session_start();

if (empty($_SESSION['id_admin'])) {
   header("location:../gagal_login.php");
}

$id_admin = $_SESSION['id_admin'];
include '../config/koneksi.php';

$sql = "SELECT * FROM tb_admin WHERE id_admin='$id_admin'";
$result = $koneksi->query($sql);
$row = $result->fetch_array();
$nama_admin = $row['nama_admin'];

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>YURADA.com</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Data Tables CSS -->
    <link href="../assets/datatables/css/dataTables.bootstrap.css">

    <!-- MetisMenu CSS -->
    <link href="../assets/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="../assets/jquery/jquery.min.js"></script>

    <!-- jQuery DataTables -->
    <script src="../assets/datatables/js/jquery.dataTables.min.js"></script>

    <!-- Data Tables JavaScript -->
    <script src="../assets/datatables/js/dataTables.bootstrap.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">YURADA.com</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="index.php?halaman=profil">
                        <i class="fa fa-user fa-fw" ></i><b><?php echo $nama_admin; ?></b></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle"  href="../logout.php">
                        <i class="fa fa-sign-out fa-fw"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Home </a>
                        </li>
                        <li>
                            <a href="index.php?halaman=acc_umkm"><i class="fa fa-check-square-o fa-fw"></i> ACC UMKM </a>
                        </li>
                        <li>
                            <a href="index.php?halaman=manaje_umkm"><i class="fa fa-group fa-fw"></i> Manaje UMKM </a>
                        </li>
                        <li>
                            <a href="index.php?halaman=validasi_barang"><i class="fa fa-check-square fa-fw"></i> Validasi Product UMKM </a>
                        </li>
                        <li>
                            <a href="index.php?halaman=manaje_kategori"><i class="fa fa-tags fa-fw"></i> Manaje Kategori Product </a>
                        </li>
                        <li>
                            <a href="index.php?halaman=jasa_kirim"><i class="fa fa-motorcycle fa-fw"></i> Manaje Jasa Pengiriman</a>
                        </li>
                        <li>
                            <a href="index.php?halaman=manaje_keluhan"><i class="fa fa-comments fa-fw"></i> Manaje Keluhan Pelanggan </a>
                        </li>
                        <li>
                            <a href="index.php?halaman=manaje_bayar"><i class="fa fa-money fa-fw"></i> Manaje Pembayaran</a>
                        </li>                        
                        <li>
                            <a href="index.php?halaman=tracking"><i class="fa fa-truck fa-fw"></i> Tracking </a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
         <div id="page-wrapper">

            <!-- content -->
            <?php 

            if ($_GET['halaman']=="profil") {
                include 'profil.php';
            }else if($_GET['halaman']=="about"){
                include 'about.php';
            }else if($_GET['halaman']=="acc_umkm"){
                include 'acc_umkm.php';
            }else if($_GET['halaman']=="manaje_umkm"){
                include 'manaje_umkm.php';
            }else if($_GET['halaman']=="validasi_barang_detail"){
                include 'validasi_barang_detail.php';
            }else if($_GET['halaman']=="validasi_barang"){
                include 'validasi_barang.php';
            }else if($_GET['halaman']=="manaje_keluhan"){
                include 'manaje_keluhan.php';
            }else if($_GET['halaman']=="manaje_kategori"){
                include 'kategori.php';
            }else if($_GET['halaman']=="tambah_kategori"){
                include 'kategori_form_tambah.php';
            }else if($_GET['halaman']=="ubah_kategori"){
                include 'kategori_form_ubah.php';
            }else if($_GET['halaman']=="manaje_bayar"){
                include 'manaje_bayar.php';
            }else if($_GET['halaman']=="jasa_kirim"){
                include 'jasa_kirim.php';
            }else if($_GET['halaman']=="tambah_jasa_kirim"){
                include 'jasa_kirim_form_tambah.php';
            }else if($_GET['halaman']=="ubah_jasa_kirim"){
                include 'jasa_kirim_form_ubah.php';
            }else if($_GET['halaman']=="tracking"){
                include '../pelanggan/tracking.php';
            }else{
                include 'home.php';                
            }

             ?>

        </div>
        <!-- end Page Wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../assets/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <!-- <script src="assets/raphael/raphael.min.js"></script>
    <script src="assets/morrisjs/morris.min.js"></script>
    <script src="assets/data/morris-data.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="../assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
