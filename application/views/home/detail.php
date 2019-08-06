        <div class="listing-info content_above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7">                        
                        <ul class="list-unstyled listing-info--meta">                            
                            <li>
                                <div class="atbd_listing_category">
                                    <a href=""><span class="la la-glass"></span><?= $list['name']; ?></a>
                                </div>
                            </li>
                        </ul><!-- ends: .listing-info-meta -->
                        <h1><?= $list['nama_lks']; ?></h1>
                        <p class="subtitle"><?= $list['tagline']; ?></p>
                    </div>                    
                </div>
            </div>          
        </div><!-- ends: .listing-info -->
    </section><!-- ends: .card-details-wrapper -->
    <section class="directory_listiing_detail_area single_area section-bg section-padding-strict">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="atbd_content_module atbd_listing_details">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-file-text-o"></span>Deskripsi</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <p><?= $list['deskripsi']; ?></p>
                        </div>
                    </div><!-- ends: .atbd_content_module -->
                    <div class="atbd_content_module atbd_listing_gallery">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-image"></span>Galeri Foto</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <div class="gallery-wrapper">
                                <div class="gallery-images">
                                    <div class="single-image">
                                        <img src="<?= base_url('assets/home/'); ?>img/<?= $list['photo']; ?>" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="<?= base_url('assets/home/'); ?>img/<?= $list['photo']; ?>" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="<?= base_url('assets/home/'); ?>img/<?= $list['photo']; ?>" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="<?= base_url('assets/home/'); ?>img/<?= $list['photo']; ?>" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="<?= base_url('assets/home/'); ?>img/<?= $list['photo']; ?>" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="img/g1.jpg" alt="">
                                    </div>
                                </div><!-- ends: .gallery-images -->
                                <div class="gallery-thumbs">
                                    <div class="single-thumb">
                                        <img src="<?= base_url('assets/home/'); ?>img/<?= $list['photo']; ?>" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="<?= base_url('assets/home/'); ?>img/<?= $list['photo']; ?>" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="<?= base_url('assets/home/'); ?>img/<?= $list['photo']; ?>" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="<?= base_url('assets/home/'); ?>img/<?= $list['photo']; ?>" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="<?= base_url('assets/home/'); ?>img/<?= $list['photo']; ?>" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="<?= base_url('assets/home/'); ?>img/<?= $list['photo']; ?>" alt="">
                                    </div>
                                </div><!-- ends: .gallery-thumbs -->
                            </div><!-- ends: .gallery-wrapper -->
                        </div>
                    </div><!-- ends: .atbd_content_module -->
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="widget atbd_widget widget-card">
                        <div class="atbd_widget_title">
                            <h4><span class="la la-user"></span>Informasi Kontak</h4>
                        </div><!-- ends: .atbd_widget_title -->
                        <div class="widget-body atbd_author_info_widget">                            
                            <div class="atbd_widget_contact_info">
                                <ul>
                                    <li>
                                        <span class="la la-map-marker"></span>
                                        <span class="atbd_info"><?= $list['alamat']; ?></span>
                                    </li>
                                    <li>
                                        <span class="la la-phone"></span>
                                        <span class="atbd_info"><?= $list['no_tlp']; ?></span>
                                    </li>
                                    <li>
                                        <span class="la la-envelope"></span>
                                        <span class="atbd_info"><?= $list['email']; ?></span>
                                    </li>
                                    <li>
                                        <span class="la la-globe"></span>
                                        <a href="<?= $list['website']; ?>" class="atbd_info">Visit web</a>
                                    </li>
                                </ul>
                            </div><!-- ends: .atbd_widget_contact_info -->
                            <div class="atbd_social_wrap">
                                <p><a href="<?= $list['instagram']; ?>"><span class="fab fa-instagram"></span></a></p>
                                <p><a href="<?= $list['facebook']; ?>"><span class="fab fa-facebook-f"></span></a></p>
                                <p><a href="<?= $list['twitter']; ?>"><span class="fab fa-twitter"></span></a></p>
                            </div><!-- ends: .atbd_social_wrap -->
                        </div><!-- ends: .widget-body -->
                    </div><!-- ends: .widget -->                    
                    <div class="widget atbd_widget widget-card">
                        <div class="atbd_widget_title">
                            <h4><span class="la la-clock-o"></span> Oprational</h4>
                            <span class="badge badge-success">Buka</span>
                        </div><!-- ends: .atbd_widget_title -->
                        <?php foreach ($oprational as $o) : ?>
                        <div class="directory_open_hours">
                            <ul>
                                <li class="atbd_open">
                                    <span class="day"><?= $o['hari']; ?></span>
                                    <div class="atbd_open_close_time">
                                        <span class="time"><?= $o['jambuka']; ?></span> - <span class="time"><?= $o['jamtutup']; ?></span>
                                    </div>
                                </li>                                
                            </ul>
                        </div>
                        <?php endforeach; ?>
                    </div><!-- ends: .widget -->                    
                </div>
            </div>
        </div>
    </section><!-- ends: .directory_listiing_detail_area -->