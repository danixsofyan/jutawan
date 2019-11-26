
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
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('assets/admin/img/profile/') . $user['image']; ?>" alt="user" class=""> <span class="hidden-md-down"><?= $user['name']; ?></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item"><i class="fa fa-power-off"></i>Logout</a>
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
                        
                        
                        <li> <a class="collapse" href="<?= base_url('admin'); ?>" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dasboard Jutawan<span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Kategori</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url(); ?>admin/allkategori/">Semua Kategori</a></li>
                                <li><a href="javascript:void(0)" class="has-arrow">Perkategori <span class="badge badge-pill badge-success pull-right">6</span></a>                                   
                                <ul aria-expanded="false" class="collapse">
                                    
                                    <li><a href="<?= base_url(); ?>admin/kategoriedukasi/">Edukasi</a></li>
                                    <li><a href="<?= base_url(); ?>admin/kategoribelanja/">Belanja</a></li>
                                    <li><a href="<?= base_url(); ?>admin/kategorimenginap/">Menginap</a></li>
                                    <li><a href="<?= base_url(); ?>admin/kategorisenibudaya/">Seni Budaya</a></li>
                                    <li><a href="<?= base_url(); ?>admin/kategoriwisata/">Wisata</a></li>
                                    <li><a href="<?= base_url(); ?>admin/kategoriekraf/">Ekonomi Kreatif</a></li>
                                    <li><a href="<?= base_url(); ?>admin/kategoritransportasi/">Transportasi</a></li>
                                    <li><a href="<?= base_url(); ?>admin/kategorikuliner/">Kuliner</a></li>
                                    
                                </ul>
                                </li>
                            </ul>
                        </li>

                        <li> <a class="collapse" href="<?= base_url(); ?>admin/tabel/" aria-expanded="false"><i class="ti-layout-accordion-merged"></i><span class="hide-menu">Tabel Pengunjung</span></a>
                        </li>

                        <li> <a class="collapse" href="<?= base_url(); ?>admin/chart/" aria-expanded="false"><i class="ti-bar-chart"></i><span class="hide-menu">Grafik</span></a>

                        

                        <li> <a class="collapse" href="<?= base_url(); ?>admin/laporan/" aria-expanded="false"><i class="ti-file"></i><span class="hide-menu">Laporan</span></a>

                        <li>
                        <a class="collapse" href="<?= base_url('auth/logout'); ?>" aria-expanded="true"><i class="ti-power-off"></i>Logout</a>                 
                        </li>

                                               <!--  <li>
                        <a class="has-arrow waves-effect waves-dark" href="<?= base_url('auth/logout'); ?>"><i class="ti-power-off"></i>Logout</a>
                        </li> -->
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->