<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Data Pengunjung Wisatawan Kota Bandung">
    <meta name="author" content="danixsofyan | Disbudpar 2019">

    <title><?= $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,600,700" rel="stylesheet">
    <!-- inject:css-->
    <link rel="stylesheet" href="<?= base_url('assets/home/'); ?>vendor_assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/home/'); ?>vendor_assets/css/brands.css">
    <link rel="stylesheet" href="<?= base_url('assets/home/'); ?>vendor_assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/home/'); ?>vendor_assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url('assets/home/'); ?>vendor_assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?= base_url('assets/home/'); ?>vendor_assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/home/'); ?>vendor_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('assets/home/'); ?>vendor_assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/home/'); ?>vendor_assets/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/home/'); ?>vendor_assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url('assets/home/'); ?>style.css">
    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/home/'); ?>img/fevicon.png">
</head>

<body>
    <section class="header-breadcrumb bgimage overlay overlay--dark">
        <div class="bg_image_holder"><img src="<?= base_url('assets/home/'); ?>img/breadcrumb1.jpg" alt=""></div>
        <div class="mainmenu-wrapper">
            <div class="menu-area menu1 menu--light">
                <div class="top-menu-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="menu-fullwidth">
                                    <div class="logo-wrapper order-lg-0 order-sm-1">
                                        <div class="logo logo-top">
                                            <a href="<?= base_url(); ?>"><img src="<?= base_url('assets/home/'); ?>img/logo-white.png" alt="logo image" class="img-fluid"></a>
                                        </div>
                                    </div><!-- ends: .logo-wrapper -->
                                    <div class="menu-container order-lg-1 order-sm-0">
                                        <div class="d_menu">
                                            <nav class="navbar navbar-expand-lg mainmenu__menu">
                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#direo-navbar-collapse" aria-controls="direo-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon icon-menu"><i class="la la-reorder"></i></span>
                                                </button>
                                                <!-- Collect the nav links, forms, and other content for toggling -->
                                                <div class="collapse navbar-collapse" id="direo-navbar-collapse">
                                                    <ul class="navbar-nav">
                                                        <li>
                                                            <a href="<?= base_url(); ?>">Beranda</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://tourism.bandung.go.id/">Tourism</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://bcg.bandungtourism.id/">Bandung City Guide</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://tourism.bandung.go.id/promosi/">Promosi</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /.navbar-collapse -->
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="menu-right order-lg-2 order-sm-2">
                                        <!-- start .author-area -->
                                        <div class="author-area">
                                            <div class="author__access_area">
                                                <ul class="d-flex list-unstyled align-items-center">
                                                    <li>
                                                        <a href="" data-toggle="modal" data-target="#login_modal" class="btn btn-xs btn-gradient btn-gradient-two">
                                                            <span class="la la-user" ></span> Masuk
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end .author-area -->
                                        <div class="offcanvas-menu d-none">
                                            <a href="" class="offcanvas-menu__user"><i class="la la-user"></i></a>
                                            <div class="offcanvas-menu__contents">
                                                <a href="" class="offcanvas-menu__close"><i class="la la-times-circle"></i></a>
                                                <div class="author-avatar">
                                                    <img src="<?= base_url('assets/home/'); ?>img/author-avatar.png" alt="" class="rounded-circle">
                                                </div>
                                                <ul class="list-unstyled">
                                                    <li><a href="dashboard-listings.html">My Profile</a></li>
                                                    <li><a href="dashboard-listings.html">My Listing</a></li>
                                                    <li><a href="dashboard-listings.html">Favorite Listing</a></li>
                                                    <li><a href="add-listing.html">Add Listing</a></li>
                                                    <li><a href="">Logout</a></li>
                                                </ul>
                                                <div class="search_area">
                                                    <form action="/">
                                                        <div class="input-group input-group-light">
                                                            <input type="text" class="form-control search_field" placeholder="Search here..." autocomplete="off">
                                                        </div>
                                                        <button type="submit" class="btn btn-sm btn-secondary">Search</button>
                                                    </form>
                                                </div><!-- ends: .search_area -->
                                            </div><!-- ends: .author-info -->
                                        </div><!-- ends: .offcanvas-menu -->
                                    </div><!-- ends: .menu-right -->
                                </div>
                            </div>
                        </div>
                        <!-- end /.row -->
                    </div>
                    <!-- end /.container -->
                </div>
                <!-- end  -->
            </div>
        </div><!-- ends: .mainmenu-wrapper -->