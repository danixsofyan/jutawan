    <section class="intro-wrapper bgimage overlay overlay--dark">
        <div class="bg_image_holder"><img src="<?= base_url('assets/home/'); ?>img/intro.jpg" alt=""></div>
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
                                                            <a href="#">Data Pengunjung</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Destinasi Wisata Populer</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Kontak</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /.navbar-collapse -->
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="menu-right order-lg-2 order-sm-2">
                                        <div class="search-wrapper">                                           
                                        </div>
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
                                            <div class="author__access_area">
                                                <ul class="d-flex list-unstyled align-items-center">
                                                    <li>
                                                        <a href="" data-toggle="modal" data-target="#login_modal" class="btn btn-xs btn-gradient btn-gradient-two">
                                                            <span class="la la-user" ></span>
                                                        </a>
                                                    </li>                                                    
                                                </ul>
                                            </div>
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
        <div class="directory_content_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="search_title_area">
                            <h2 class="title">Selamat Datang di Portal Jutawan</h2>
                            <p class="sub_title">Dapatkan Data pengungjung Wisatawan Kota Bandung</p>
                        </div><!-- ends: .search_title_area -->                        
                        <div class="directory_home_category_area">
                            <ul class="categories">
                                <li>
                                    <a href="">
                                        <span class="color-primary"><i class="la la-cutlery"></i></span>
                                        Wisata Kuliner
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="color-success"><i class="la la-map-marker"></i></span>
                                        Wisata Destinasi
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="color-warning"><i class="la la-shopping-cart"></i></span>
                                        Wisata Belanja
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="color-danger"><i class="la la-bed"></i></span>
                                        Wisata Menginap
                                    </a>
                                </li>
                            </ul>
                        </div><!-- ends: .directory_home_category_area -->
                    </div><!-- ends: .col-lg-10 -->
                </div>
            </div>
        </div><!-- ends: .directory_search_area -->
    </section><!-- ends: .intro-wrapper -->
    <section class="categories-cards section-padding-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="section-title">
                        <h2>Data Pengunjung Kota Bandung 2019</h2>
                        <p>Meliputi restoran, perbelanjaan, hotel, dan tempat-tempat di Kota Bandung.</p>
                    </div>
                </div>
            </div>            
            <div class="row">
                <canvas id="chart1" height="50"></canvas>
            </div>
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card bg-cyan text-white">
                        <div class="card-body">
                            <h5 class="card-title ">EDUKASI</h5>
                            <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                <span class="display-5 text-info"><i class="la la-puzzle-piece text-white"></i></span>
                                <a href="javscript:void(0)" class="link display-5 ml-auto text-white">23</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title">BELANJA</h5>
                            <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                <span class="display-5 text-purple"><i class="la la-shopping-cart text-white"></i></span>
                                <a href="javscript:void(0)" class="link display-5 ml-auto text-white">169</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-purple text-white">
                        <div class="card-body">
                            <h5 class="card-title">MENGINAP</h5>
                            <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                <span class="display-5 text-primary"><i class="la la-bed text-white"></i></span>
                                <a href="javscript:void(0)" class="link display-5 ml-auto text-white">311</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <h5 class="card-title">SENI BUDAYA</h5>
                            <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                <span class="display-5 text-success"><i class="la la-music to text-white"></i></span>
                                <a href="javscript:void(0)" class="link display-5 ml-auto text-white">117</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <h5 class="card-title ">WISATA</h5>
                            <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                <span class="display-5 text-info"><i class="la la-map-marker text-white"></i></span>
                                <a href="javscript:void(0)" class="link display-5 ml-auto text-white">23</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-purple text-white">
                        <div class="card-body">
                            <h5 class="card-title">EKONOMI KREATIF</h5>
                            <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                <span class="display-5 text-purple"><i class="la la-laptop text-white"></i></span>
                                <a href="javscript:void(0)" class="link display-5 ml-auto text-white">169</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title">TRANSPORTASI</h5>
                            <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                <span class="display-5 text-primary"><i class="la la-plane text-white"></i></span>
                                <a href="javscript:void(0)" class="link display-5 ml-auto text-white">311</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-cyan text-white">
                        <div class="card-body">
                            <h5 class="card-title">KULINER</h5>
                            <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                <span class="display-5 text-success"><i class="la la-cutlery text-white"></i></span>
                                <a href="javscript:void(0)" class="link display-5 ml-auto text-white">117</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>      
    </section><!-- ends: .categories-cards -->
    <section class="listing-cards section-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Destinasi Wisata populer</h2>
                        <p>Jelajahi daftar wista populer di Kota Bandung</p>
                    </div>
                </div>
                <div class="listing-cards-wrapper col-lg-12">
                    <div class="row">
                        <?php foreach ($list as $l) : ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href="<?= base_url(); ?>listing/detail/<?= $l['id']; ?>">
                                                <img src="<?= base_url('assets/home/'); ?>img/<?= $l['photo']; ?>" alt="listing image">
                                            </a>
                                        </div><!-- ends: .atbd_listing_image -->
                                        <!-- <div class="atbd_author atbd_author--thumb">
                                            <a href="">
                                                <img src="<?= base_url('assets/home/'); ?>img/author-thumb2.jpg" alt="Author Image">
                                                <span class="custom-tooltip"><?= $l['nama_lks']; ?></span>
                                            </a>
                                        </div> -->
                                        <div class="atbd_thumbnail_overlay_content">
                                            <ul class="atbd_upper_badge">
                                                <li><span class="atbd_badge"></span></li>
                                            </ul><!-- ends .atbd_upper_badge -->
                                        </div><!-- ends: .atbd_thumbnail_overlay_content -->
                                    </figure><!-- ends: .atbd_listing_thumbnail_area -->
                                    <div class="atbd_listing_info">
                                        <div class="atbd_content_upper">
                                            <h4 class="atbd_listing_title">
                                                <a href="<?= base_url(); ?>listing/detail/<?= $l['id']; ?>"><?= $l['nama_lks']; ?></a>
                                            </h4>
                                            <div class="atbd_listing_data_list">
                                                <ul>
                                                    <li>
                                                        <p><span class="la la-map-marker"></span><?= $l['alamat']; ?></p>
                                                    </li>
                                                    <li>
                                                        <p><span class="la la-phone"></span><?= $l['no_tlp']; ?></p>
                                                    </li>
                                                    <li>
                                                        <p><span class="la la-globe"><a href="<?= $l['website']; ?>"></span>Visit Website</p></a>
                                                    </li>
                                                </ul>
                                            </div><!-- End atbd listing meta -->
                                        </div><!-- end .atbd_content_upper -->
                                        <div class="atbd_listing_bottom_content">
                                            <div class="atbd_content_left">
                                                <div class="atbd_listing_category">
                                                    <a href=""><span class="la <?= $l['icon']; ?>"></span><?= $l['name']; ?></a>
                                                </div>
                                            </div>
                                            <ul class="atbd_content_right">
                                                <li class="atbd_count"><span class="la la-user"></span><?= $l['jumlah_total']; ?>+</li>
                                                <li class="atbd_save">
                                                    <span class="la la-heart-o"></span>
                                                </li>
                                            </ul>
                                        </div><!-- end .atbd_listing_bottom_content -->
                                    </div><!-- ends: .atbd_listing_info -->
                                </article><!-- atbd_single_listing_wrapper -->
                            </div>
                        </div><!-- ends: .col-lg-4 -->
                        <?php endforeach; ?>                       
                        <!-- <div class="col-lg-12 text-center m-top-20">
                            <a href="all-listings-grid.html" class="btn btn-gradient btn-gradient-two">Lihat Semua</a>
                        </div> -->
                    </div>
                </div><!-- ends: .listing-cards-wrapper -->
            </div>
        </div>
    </section><!-- ends: .listing-cards -->
    <section class="cta section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Manfaat <span>JUTAWAN</span> untuk kemajuan pariwisata</h2>
                        <p>Data pengunjung Wisatawan</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <img src="<?= base_url('assets/home/'); ?>img/svg/illustration-1.svg" alt="" class="svg">
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-md-6 mt-5 mt-md-0">
                            <ul class="feature-list-wrapper list-unstyled">
                                <li>
                                    <div class="icon"><span class="circle-secondary"><i class="la la-file"></i></span></div>
                                    <div class="list-content">
                                        <h4>Open Data</h4>
                                        <p>Informasi data pengunjung dapat diakses secara cepat</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><span class="circle-success"><i class="la la-refresh"></i></span></div>
                                    <div class="list-content">
                                        <h4>Up to date</h4>
                                        <p>Data pengungjung diperbarui langsung oleh stakeholder dari masing-masing tempat wisata</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><span class="circle-primary"><i class="la la-bullhorn"></i></span></div>
                                    <div class="list-content">
                                        <h4>Promosikan Objek Wista</h4>
                                        <p>Data pengunjung akan menjadi acuan para tourist mencari destinasi wisata</p>
                                    </div>
                                </li>
                            </ul><!-- ends: .feature-list-wrapper -->
                            <ul class="action-btns list-unstyled">
                                <!-- <li><a href="" class="btn btn-success">See our Pricing</a></li> -->
                                <li><a href="" class="btn btn-primary">Hubungi Kami</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ends: .cta -->
    
    <section class="subscribe-wrapper" style="padding-top: 0 !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Mitra Kami</h1>
                    <p>Stakeholder budaya & pariwisata kota bandung</p>     
                </div>
            </div>
        </div>
        <div class="container p-top-80">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel owl-carousel">
                        <div class="carousel-single">
                            <img src="<?= base_url('assets/home/'); ?>img/cl1.png" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="<?= base_url('assets/home/'); ?>img/cl2.png" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="<?= base_url('assets/home/'); ?>img/cl3.png" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="<?= base_url('assets/home/'); ?>img/cl4.png" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="<?= base_url('assets/home/'); ?>img/cl5.png" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="<?= base_url('assets/home/'); ?>img/cl6.png" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="<?= base_url('assets/home/'); ?>img/cl7.png" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="<?= base_url('assets/home/'); ?>img/cl8.png" alt="">
                        </div>
                    </div><!-- ends: .logo-carousel -->
                </div>
            </div>
        </div>
    </section><!-- ends: .subscribe-wrapper -->
