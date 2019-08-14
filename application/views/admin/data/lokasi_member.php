    <section class="listing-cards section-bg">
        <div class="container">
            <div class="row">
                <div class="listing-cards-wrapper col-lg-12">
                <?= $this->session->flashdata('message'); ?>
                <a href="<?= base_url('data/tambahlokasi'); ?>" class="btn btn-primary mb-3">Tambah Lokasi</a>
                    <div class="row">
                        <?php foreach ($list as $l) : ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href="<?= base_url(); ?>listing/detail/<?= $l['id']; ?>">
                                                <img src="<?= base_url('assets/admin/'); ?>img/cover/<?= $l['photo']; ?>" alt="listing image">
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
                                                <a href="<?= base_url(); ?>data/ubahlokasi/<?= $l['id']; ?>" class="badge badge-success text-white"><i class="far fa-edit"></i> Ubah</a>
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
</div>