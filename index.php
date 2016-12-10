<?php 

include 'config/koneksi.php';

error_reporting(0);
session_start();

// get value from login session
$id_pelanggan = $_SESSION['id_pelanggan'];

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
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <!-- <link href="assets/morrisjs/morris.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Helper Widget CSS -->
    <link href="assets/helper/AdminLTE.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <!-- <link href="assets/sweet-alert/sweetalert.css" rel="stylesheet" type="text/css"> -->
    <!-- <script type="text/javascript" src="assets/sweet-alert/sweetalert.js"></script> -->


    <!-- jQuery -->
    <script src="assets/jquery/jquery.min.js"></script>

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
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
                    <a class="dropdown-toggle"  href="index.php?halaman=service">
                        <i class="fa fa-phone-square fa-fw"></i>
                    </a>
                    
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle"  href="index.php?halaman=about">
                        <i class="fa fa-exclamation-circle fa-fw"></i>
                    </a>
                </li>

                <!-- if pelanggan not login show daftar -->
                <?php if (empty($id_pelanggan)){ ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user fa-fw" ></i><i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-user">
                        <li> <i class="fa fa-plus fa-fw"></i>  Daftar
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="index.php?halaman=daftar_pelanggan"><i class="fa fa-user fa-fw"></i> Pelanggan </a>
                        </li>
                        <li>
                            <a href="index.php?halaman=daftar_umkm"><i class="fa fa-users fa-fw"></i> UMKM </a>
                        </li>
                    </ul>
                </li>
                <?php } ?>

                <!-- if pelanggan not login disabled menu-->
                <?php if (empty($id_pelanggan)){
                            $disabled_li="disabled"; 
                            $disabled_a="return false";
                    ?>
                <li class="dropdown">
                    <a class="dropdown-toggle"  href="index.php?halaman=login">
                        <i class="fa fa-sign-in fa-fw"></i>
                    </a>
                </li>
                
                <?php }else{ ?>
                    <li>
                        <?php 

                        $sql = "SELECT nama_pelanggan FROM tb_pelanggan WHERE id_pelanggan='$id_pelanggan'";
                        $result = $koneksi->query($sql);
                        $row = $result->fetch_array();

                         ?>
                        
                        <a class="dropdown-toggle"  href="index.php?halaman=profil&id_pelanggan=<?php echo $row['nama_pelanggan']; ?>">
                            <?php echo $row['nama_pelanggan']; ?>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-toggle"  href="logout.php">
                            <i class="fa fa-sign-out fa-fw"></i>
                        </a>
                    </li>
                <?php } ?>
                <!-- /.dropdown -->

            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Home </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tags fa-fw"></i>Product<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?halaman=product_hijab">Accesoris Hijab</a>
                                </li>
                                <li>
                                    <a href="index.php?halaman=product_fashion">Accesoris Fashion</a>
                                </li>
                                <li>
                                    <a href="index.php?halaman=product_elektronik">Accesoris Elektronik</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo $disabled_li; ?>">
                            <a onclick="<?php echo $disabled_a; ?>" href="index.php?halaman=shoppingcart"><i class="fa fa-shopping-cart fa-fw"></i> Shopping Cart </a>
                        </li>
                        <li class="<?php echo $disabled_li; ?>">
                            <a onclick="<?php echo $disabled_a; ?>" href="index.php?halaman=checkout"><i class="fa fa-money fa-fw"></i> Checkout </a>
                        </li>
                        <li class="<?php echo $disabled_li; ?>">
                            <a onclick="<?php echo $disabled_a; ?>" href="index.php?halaman=payment"><i class="fa fa-check-square-o fa-fw"></i> Payment </a>
                        </li>
                        <li class="<?php echo $disabled_li; ?>">
                            <a  onclick="<?php echo $disabled_a; ?>"href="index.php?halaman=tracking"><i class="fa fa-truck fa-fw"></i> Tracking </a>
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

            if ($_GET['halaman']=="daftar_umkm") {
                include 'umkm/form_daftar_umkm.php';
            }else if($_GET['halaman']=="daftar_pelanggan"){
                include 'pelanggan/form_daftar_pelanggan.php';
            }else if($_GET['halaman']=="profil"){
                include 'pelanggan/profil.php';
            }else if($_GET['halaman']=="form_profil"){
                include 'pelanggan/form_profil.php';
            }else if($_GET['halaman']=="login"){
                include 'form_login.php';
            }else if($_GET['halaman']=="service"){
                include 'pelanggan/service.php';
            }else if($_GET['halaman']=="about"){
                include 'pelanggan/about.php';
            }else if($_GET['halaman']=="checkout"){
                include 'pelanggan/checkout.php';
            }else if($_GET['halaman']=="shoppingcart"){
                include 'pelanggan/shoppingcart.php';
            }else if($_GET['halaman']=="tracking"){
                include 'pelanggan/tracking.php';
            }else if($_GET['halaman']=="payment"){
                include 'pelanggan/payment.php';
            }else if($_GET['halaman']=="product_hijab"){
                include 'pelanggan/product.php';
            }else if($_GET['halaman']=="product_fashion"){
                include 'pelanggan/product.php';
            }else if($_GET['halaman']=="product_elektronik"){
                include 'pelanggan/product.php';
            }else if($_GET['halaman']=="detail_product"){
                include 'pelanggan/detail_product.php';
            }else{
                include 'pelanggan/home.php';                
            }


             ?>




        </div>
        <!-- end Page Wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <!-- <script src="assets/raphael/raphael.min.js"></script>
    <script src="assets/morrisjs/morris.min.js"></script>
    <script src="assets/data/morris-data.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
