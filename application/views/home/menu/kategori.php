


        <div class="breadcrumb-wrapper content_above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-title"><?= $title; ?> </h1>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- ends: .breadcrumb-wrapper -->
    </section>

<section class="cards-grid section-padding-two border-bottom">
        <div class="container">
            <div class="row">
                <div class="listing-cards-wrapper col-lg-12">
                    <div class="row">
                        <?php foreach ($lokasiedukasi as $l) : ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href="<?= base_url(); ?>listing/detail/<?= $l['id']; ?>">
                                                <img src="<?= base_url('assets/admin/'); ?>img/cover/<?= $l['photo']; ?>" alt="listing image">
                                            </a>
                                        </div>
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
                                                        <p><span class="la la-calendar-check-o"></span><?= $l['oprational']; ?></p>
                                                    </li>
                                                    <li>
                                                        <p><span class="la la-globe"><a href="<?= $l['website']; ?>"></span>Visit Website</p></a>
                                                    </li>
                                                </ul>
                                            </div><!-- End atbd listing meta -->
                                        </div><!-- end .atbd_content_upper -->
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

