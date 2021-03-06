<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Data Pengunjung Wisatawan Kota Bandung">
    <meta name="author" content="danixsofyan | Disbudpar 2019">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/admin/'); ?>images/bdgpng.png">
    <title>JUTAWAN - Kunjungan Wisatawan</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="<?= base_url('assets/eliteadmin/'); ?>node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="<?= base_url('assets/eliteadmin/'); ?>node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/eliteadmin/'); ?>css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?= base_url('assets/eliteadmin/'); ?>css/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="horizontal-nav boxed skin-megna fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- end reload-->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="nav bar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= base_url('admin'); ?>">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?= base_url('assets/eliteadmin/'); ?>images/logo-bdg-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?= base_url('assets/eliteadmin/'); ?>images/logo-bdg-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span class="hidden-sm-down">
                        <!-- dark Logo text -->
                        <img src="<?= base_url('assets/eliteadmin/'); ?>images/logo-text.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->    
                        <img src="<?= base_url('assets/eliteadmin/'); ?>images/logojutawan1.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search 
                        -->
                        <!-- ============================================================== -->
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('assets/eliteadmin/'); ?>images/users/0.jpg" alt="user" class=""> <span class="hidden-md-down">Admin Jutawan &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================ -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="<?= base_url('assets/eliteadmin/'); ?>images/users/1bdg.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Mark Jeckson</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- PERSONAL</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="<?= base_url('admin'); ?>" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dasboard Jutawan<span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                                <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url('admin'); ?>">Home </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Lembaga</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-contact.html">Contact / Employee</a></li>
                                <li><a href="app-contact-detail.html">Contact Detail</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-accordion-merged"></i><span class="hide-menu">Data Jutawan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="table-data-table.html">Data Kunjungan</a></li>
                                <li><a href="table-footable.html">Footable</a></li>
                                <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Widgets</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="widget-charts.html">Charts Widgets</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- EXTRA COMPONENTS</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Pages <span class="badge badge-pill badge-info">25</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)" class="has-arrow">Authentication <span class="badge badge-pill badge-success pull-right">6</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="pages-login-2.html">Login 2</a></li>
                                        <li><a href="pages-register3.html">Register 3</a></li>
                                        <li><a href="pages-recover-password.html">Recover password</a></li>
                                    </ul>
                                </li>
                                <li><a href="pages-profile.html">Profile page</a></li>
                                <li><a href="pages-error-404.html" class="collapse">Error Pages 404</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-pie-chart"></i><span class="hide-menu">Extra</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="chart-echart.html">Echarts</a></li>
                                <li><a href="chart-flot.html">Flot Chart</a></li>
                                <li>
                                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Maps</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="map-google.html">Google Maps</a></li>
                                        <li><a href="map-vector.html">Vector Maps</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                        <a class="has-arrow waves-effect waves-dark" href="<?= base_url('auth/logout/'); ?>"><i class="ti-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard Jutawan 1</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard Jutawan 1</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="card-group" >
                    <!-- Column BELANJA-->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-note"></i></h3>
                                            <p class="text-muted">BELANJA</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-primary"> 186.786</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Column BELANJA-->
                    <!-- Column EDUKASI-->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-bag"></i></h3>
                                            <p class="text-muted">EDUKASI</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-cyan"> 1.303.917</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Column EDUKASI-->
                    <!-- Column EKONOMI KREATIF-->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-doc"></i></h3>
                                            <p class="text-muted">EKONOMI KREATIF</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-purple">31.319</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Column EKONOMI KREATIF-->
                    <!-- Column KULINER-->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-bag"></i></h3>
                                            <p class="text-muted">KULINER</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-success">12.800</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Column KULINER-->                   
                </div>
                <div class="card-group">
                    <!-- Column MENGINAP-->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-bag"></i></h3>
                                            <p class="text-muted">MENGINAP</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-success">1.680.000</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Column MENGINAP-->
                    <!-- Column SENI BUDAYA-->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-bag"></i></h3>
                                            <p class="text-muted">SENI BUDAYA</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-success">231.388</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Column SENI BUDAYA-->
                    <!-- Column TRANSPORTASI-->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-bag"></i></h3>
                                            <p class="text-muted">TRANSPORTASI</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-success">7.607.014</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Column TRANSPORTASI-->                    
                    <!-- Column WISATA-->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-bag"></i></h3>
                                            <p class="text-muted">WISATA</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-success">521.951</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Column WISATA-->
                </div>
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Over Visitor, Our income , slaes different and  sales prediction -->
                <!-- ============================================================== -->
                <div class="row">
                <!-- Chart Report Jutawan-->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Report Jutawan </h4>
                                <div class="ml-auto">
                                        <select class="custom-select b-0">
                                            <option>2017</option>
                                            <option value="1">2018</option>
                                            <option value="2" selected="">2019</option>
                                        </select>
                                </div>
                                <div id="bar-chart" style="width:100%; height:400px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End Chart Report Jutawan-->
                </div>
                <!-- ============================================================== -->
                <!-- Comment - table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- Comment widgets -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Table -->
                    <!-- ============================================================== -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">Data Kunjungan Wisatawan</h5>
                                        <h6 class="card-subtitle">Kota Bandung </h6>
                                    </div>
                                    <div class="ml-auto">
                                        <select class="custom-select b-0">
                                            <option>Januari</option>
                                            <option value="1">Februari</option>
                                            <option value="2" selected="">Maret</option>
                                            <option value="3">April</option>
                                            <option value="4">Mei</option>
                                            <option value="5">Juni</option>
                                            <option value="6">Juli</option>
                                            <option value="7">Agustus</option>
                                            <option value="8">September</option>
                                            <option value="9">Oktober</option>
                                            <option value="10">November</option>
                                            <option value="11">Desember</option>
                                        </select>
                                    </div>
                                    <div class="ml-auto">
                                        <select class="custom-select b-0">
                                            <option>2017</option>
                                            <option value="1">2018</option>
                                            <option value="2" selected="">2019</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body bg-light">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>Juli 2018</h3>
                                        <h5 class="font-light m-t-0">Report untuk bulan ini</h5></div>
                                    <div class="col-6 align-self-center display-6 text-right">
                                        <h2 class="text-success"> 11.575.175</h2></div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NO</th>
                                            <th>KATEGORI</th>
                                            <th>STATUS</th>
                                            <th>JUMLAH PENGUNJUNG</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="txt-oflo">Belanja</td>
                                            <td><span class="badge badge-success badge-pill">Sudah Input</span> </td>
                                            <td><span>186.786</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="txt-oflo">Edukasi</td>
                                            <td><span class="badge badge-success badge-pill">Sudah Input</span> </td>
                                            <td><span> 1.303.917</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="txt-oflo">Akonomi Kreatif</td>
                                            <td><span class="badge badge-success badge-pill">Sudah Input</span> </td>
                                            <td><span> 31.319</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="txt-oflo">Kuliner</td>
                                            <td><span class="badge badge-danger badge-pill">Belum Input</span></td>
                                            <td><span> </span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="txt-oflo">Menginap</td>
                                            <td><span class="badge badge-success badge-pill">Sudah Input</span> </td>
                                            <td><span> 1.680.000</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="txt-oflo">Suni budaya</td>
                                            <td><span class="badge badge-success badge-pill">Sudah Input</span> </td>
                                            <td><span> 231.388</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="txt-oflo">Transportasi</td>
                                            <td><span class="badge badge-warning badge-pill">Belum Input Semu</span></td>
                                            <td><span> 7.607.014</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td class="txt-oflo">Wisata</td>
                                            <td><span class="badge badge-warning badge-pill">Belum Input Semu</span></td>
                                            <td><span> 521.951</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Review -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Detail Kunjungan Wisatawan Kota Bandung</h5>
                            <div class="ml-auto">
                                <select class="custom-select b-0">
                                    <option>All Status</option>
                                        <option value="1">Sudah Input</option>
                                        <option value="2" selected="">Belum Input</option>
                                </select>
                            </div>
                            <div class="ml-auto">
                                <select class="custom-select b-0">
                                    <option>All Bulan</option>
                                        <option value="1">Januari</option>
                                        <option value="2" selected="">Febuari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>              
                                </select>
                            </div>
                            <div class="ml-auto">
                                <select class="custom-select b-0">
                                    <option>All Bulan</option>
                                        <option value="1">Januari</option>
                                        <option value="2" selected="">Febuari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>              
                                </select>
                            </div>
                            </div>
                                </br>
                            <div class="card-body bg-light">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>Juli 2018</h3>
                                        <h5 class="font-light m-t-0">Jumlah Lembaga yang Belum Input Data</h5></div>
                                    <div class="col-6 align-self-center display-6 text-right">
                                        <h2 class="text-success"> 2</h2></div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lembaga</th>
                                            <th>Tanggal</th>
                                            <th>Jumlah Kunjungan</th>
                                            <th class="text-center">Status Input</th>
                                            <th class="text-center">Status Pengingatkan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="link">1</a></td>
                                            <td>Saung Angklung Udjo</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> </span></td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="label label-table label-danger">Belum Input</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> Kirim Pesan Pengingat</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="link">2</a></td>
                                            <td>Kebun Binatang</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> </span></td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="label label-table label-danger">Belum Input</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> Kirim Pesan Pengingat</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="link">3</a></td>
                                            <td>Musium Pos</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> 25 Juli 2018</span></td>
                                            <td>73.163</td>
                                            <td class="text-center">
                                                <div class="label label-table label-success">Sudah Input</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> Kirim Pesan Pengingat</td>
                                        </tr>                                        
                                        <tr>
                                            <td><a href="javascript:void(0)" class="link">4</a></td>
                                            <td>Musium Geologi</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> 3 Juli 2018</span></td>
                                            <td>469.000</td>
                                            <td class="text-center">
                                                <div class="label label-table label-success">Sudah Input</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="link">5 </a></td>
                                            <td>Kartika Sari</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> 3 Juli 2018</span></td>
                                            <td>7.200</td>
                                            <td class="text-center">
                                                <div class="label label-table label-success">Sudah Input</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="link">6</a></td>
                                            <td>Trans Studio</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> 3 Juli 2018</span></td>
                                            <td>161.260</td>
                                            <td class="text-center">
                                                <div class="label label-table label-success">Sudah Input</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="link">7</a></td>
                                            <td>Hotel Bintang 5, 4, dan 3</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> 3 Juli 2018</span></td>
                                            <td>1.680.000</td>
                                            <td class="text-center">
                                                <div class="label label-table label-success">Sudah Input</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- End Review -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Comment - chats -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Over Visitor, Our income , slaes different and  sales prediction -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>

        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2019 Dinas Budaya dan Pariwisata Kota Bandung
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src=".<?= base_url('assets/eliteadmin/'); ?>node_modules/popper/popper.min.js"></script>
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src=".<?= base_url('assets/eliteadmin/'); ?>node_modules/raphael/raphael-min.js"></script>
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/morrisjs/morris.min.js"></script>
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/toast-master/js/jquery.toast.js"></script>
        <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Chart JS -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/echarts/echarts-all.js"></script>
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/echarts/echarts-init.js"></script>
</body>

</html>