    <div class="breadcrumb-wrapper content_above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-title"><?= $title; ?></h1>                        
                    </div>
                </div>
            </div>
        </div><!-- ends: .breadcrumb-wrapper -->
    </section>
<form method="post" action="<?= base_url('addlisting/add'); ?>">
    <section class="add-listing-wrapper border-bottom section-bg section-padding-strict">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-user"></span>Informasi Umum</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <form action="/">
                                <div class="form-group">
                                    <label for="title" class="form-label">Nama Lokasi</label>
                                    <input type="text" class="form-control" id="namalks" name="namalks" placeholder="Nama Lokasi" required>
                                </div>
                                <div class="form-group">
                                    <label for="desc" class="form-label">Deskripsi</label>
                                    <textarea id="desc" rows="8" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi lokasi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tagline" class="form-label">Tagline</label>
                                    <input type="text" class="form-control" id="tagline" name="tagline" placeholder="Tagline atau Motto" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Harga Tiket</label>                                    
                                    <div class="pricing-option-inputs">
                                        <input type="text" id="tiket" name="tiket" class="form-control" placeholder="Contoh: 10000">                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="short_desc" class="form-label">Keterangan Singkat</label>
                                    <textarea id="ket" name="ket" ="ket" rows="5" class="form-control" placeholder="Keterangan Singkat"></textarea>
                                </div>                                
                            </form>
                        </div><!-- ends: .atbdb_content_module_contents -->
                    </div><!-- ends: .atbd_content_module -->
                </div><!-- ends: .col-lg-10 -->
                <div class="col-lg-10 offset-lg-1">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-user"></span>Informasi Kontak</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <form action="/">                                
                                <div class="form-group">
                                    <label for="address" class="form-label">Alamat</label>
                                    <input type="text" placeholder="Alamat" id="alamat" nama="alamat" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone_number" class="form-label">Nomer Telepon</label>
                                    <input type="text" placeholder="Nomor Telepon" id="notlp" name="notlp" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact_email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="website_address" class="form-label">Website</label>
                                    <input type="text" id="website" name="website" class="form-control" placeholder="Listing Website contoh http://example.com">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Social Media</label>
                                    <div id="social_info_sortable_container">
                                        <div class="directorist atbdp_social_field_wrapper">
                                            <div class="row m-bottom-20" id="social-form-fields">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="select-basic">
                                                            <select class="form-control">
                                                                <option value="facebook"> Facebook</option>
                                                                <option value="instagram"> Instagram</option>
                                                                <option value="twitter"> Twitter</option>
                                                                <option value="youtube"> Youtube</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="url" class="form-control directory_field atbdp_social_input" placeholder="contoh. http://example.com" required="" id="sosmed" name="sosmed">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 d-flex align-items-center">
                                                    <span class="removeSocialField btn-danger" id="removeSocial" title="Remove this item"><i class="la la-times"></i></span>
                                                    <span class="adl-move-icon btn-secondary"><i class="la la-arrows"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="copy-btn btn btn-sm btn-secondary"><i class="la la-plus"></i> Add New</button>
                                </div>
                            </form>
                        </div><!-- ends: .atbdb_content_module_contents -->
                    </div><!-- ends: .atbd_content_module -->
                </div><!-- ends: .col-lg-10 -->
                <div class="col-lg-10 offset-lg-1">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-calendar-check-o"></span>Jam Operasional</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <div class="business-hour">                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="bdbh_saturday" class="atbd_day_label form-label">Senin</label>
                                            <div class="row atbd_row_bg">
                                                <div class="col-sm-6">
                                                    <label for="bdbh_saturday" class="not_empty">Waktu Buka</label>
                                                    <input type="time" id="oprational-1" name="oprational-1" value="" class="form-control directory_field">
                                                </div>
                                                <div class="col-sm-6 mt-3 mt-sm-0">
                                                    <label for="bdbh_saturday_cls" class="not_empty">Waktu Tutup</label>
                                                    <input type="time" id="oprational-cl-1" name="oprational-cl-1" value="" class="form-control directory_field">
                                                </div>
                                            </div>
                                            <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                <input type="checkbox" class="custom-control-input" name="enable247hour" value="1" id="sat_cls">
                                                <label for="sat_cls" class="not_empty custom-control-label">Tandai sebagai Ditutup</label>
                                            </div>
                                        </div><!-- ends: .form-group -->
                                        <div class="form-group">
                                            <label for="bdbh_sunday" class="atbd_day_label form-label">Selasa</label>
                                            <div class="row atbd_row_bg">
                                                <div class="col-sm-6">
                                                    <label for="bdbh_sunday" class="not_empty">Waktu Buka</label>
                                                    <input type="time" id="bdbh_sunday" value="" class="form-control directory_field">
                                                </div>
                                                <div class="col-sm-6 mt-3 mt-sm-0">
                                                    <label for="bdbh_sunday_cls" class="not_empty">Waktu Tutup</label>
                                                    <input type="time" id="bdbh_sunday_cls" value="" class="form-control directory_field">
                                                </div>
                                            </div>
                                            <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                <input type="checkbox" class="custom-control-input" name="enable247hour" value="1" id="sun_cls">
                                                <label for="sun_cls" class="not_empty custom-control-label">Tandai sebagai Ditutup</label>
                                            </div>
                                        </div><!-- ends: .form-group -->
                                        <div class="form-group">
                                            <label for="bdbh_monday" class="atbd_day_label form-label">Rabu</label>
                                            <div class="row atbd_row_bg">
                                                <div class="col-sm-6">
                                                    <label for="bdbh_monday" class="not_empty">Waktu Buka</label>
                                                    <input type="time" id="bdbh_monday" value="" class="form-control directory_field">
                                                </div>
                                                <div class="col-sm-6 mt-3 mt-sm-0">
                                                    <label for="bdbh_monday_cls" class="not_empty">Waktu Tutup</label>
                                                    <input type="time" id="bdbh_monday_cls" value="" class="form-control directory_field">
                                                </div>
                                            </div>
                                            <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                <input type="checkbox" class="custom-control-input" name="enable247hour" value="1" id="mon_cls">
                                                <label for="mon_cls" class="not_empty custom-control-label">Tandai sebagai Ditutup</label>
                                            </div>
                                        </div><!-- ends: .form-group -->
                                        <div class="form-group">
                                            <label for="bdbh_tuesday" class="atbd_day_label form-label">Kamis</label>
                                            <div class="row atbd_row_bg">
                                                <div class="col-sm-6">
                                                    <label for="bdbh_tuesday" class="not_empty">Waktu Buka</label>
                                                    <input type="time" id="bdbh_tuesday" value="" class="form-control directory_field">
                                                </div>
                                                <div class="col-sm-6 mt-3 mt-sm-0">
                                                    <label for="bdbh_tuesday_cls" class="not_empty">Waktu Tutup</label>
                                                    <input type="time" id="bdbh_tuesday_cls" value="" class="form-control directory_field">
                                                </div>
                                            </div>
                                            <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                <input type="checkbox" class="custom-control-input" name="enable247hour" value="1" id="tue_cls">
                                                <label for="tue_cls" class="not_empty custom-control-label">Tandai sebagai Ditutup</label>
                                            </div>
                                        </div><!-- ends: .form-group -->
                                        <div class="form-group">
                                            <label for="bdbh_wednesday" class="atbd_day_label form-label">Jumaat</label>
                                            <div class="row atbd_row_bg">
                                                <div class="col-sm-6">
                                                    <label for="bdbh_wednesday" class="not_empty">Waktu Buka</label>
                                                    <input type="time" id="bdbh_wednesday" value="" class="form-control directory_field">
                                                </div>
                                                <div class="col-sm-6 mt-3 mt-sm-0">
                                                    <label for="bdbh_wednesday_cls" class="not_empty">Waktu Tutup</label>
                                                    <input type="time" id="bdbh_wednesday_cls" value="" class="form-control directory_field">
                                                </div>
                                            </div>
                                            <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                <input type="checkbox" class="custom-control-input" name="enable247hour" value="1" id="wed_cls">
                                                <label for="wed_cls" class="not_empty custom-control-label">Tandai sebagai Ditutup</label>
                                            </div>
                                        </div><!-- ends: .form-group -->
                                        <div class="form-group">
                                            <label for="bdbh_thursday" class="atbd_day_label form-label">Sabtu</label>
                                            <div class="row atbd_row_bg">
                                                <div class="col-sm-6">
                                                    <label for="bdbh_thursday" class="not_empty">Waktu Buka</label>
                                                    <input type="time" id="bdbh_thursday" value="" class="form-control directory_field">
                                                </div>
                                                <div class="col-sm-6 mt-3 mt-sm-0">
                                                    <label for="bdbh_thursday_cls" class="not_empty">Waktu Tutup</label>
                                                    <input type="time" id="bdbh_thursday_cls" value="" class="form-control directory_field">
                                                </div>
                                            </div>
                                            <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                <input type="checkbox" class="custom-control-input" name="enable247hour" value="1" id="thu_cls">
                                                <label for="thu_cls" class="not_empty custom-control-label">Tandai sebagai Ditutup</label>
                                            </div>
                                        </div><!-- ends: .form-group -->
                                        <div class="form-group">
                                            <label for="bdbh_friday" class="atbd_day_label form-label">Minggu</label>
                                            <div class="row atbd_row_bg">
                                                <div class="col-sm-6">
                                                    <label for="bdbh_friday" class="not_empty">Waktu Buka</label>
                                                    <input type="time" id="bdbh_friday" value="" class="form-control directory_field">
                                                </div>
                                                <div class="col-sm-6 mt-3 mt-sm-0">
                                                    <label for="bdbh_friday_cls" class="not_empty">Waktu Tutup</label>
                                                    <input type="time" id="bdbh_friday_cls" value="" class="form-control directory_field">
                                                </div>
                                            </div>
                                            <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                <input type="checkbox" class="custom-control-input" name="enable247hour" value="1" id="fri_cls">
                                                <label for="fri_cls" class="not_empty custom-control-label">Tandai sebagai Ditutup</label>
                                            </div>
                                        </div><!-- ends: .form-group -->
                                    </div>
                                    <!--ends col-md-6 col-sm-12-->
                                </div>
                                <!--ends .row-->
                            </div>
                        </div><!-- ends: .atbdb_content_module_contents -->
                    </div><!-- ends: .atbd_content_module -->
                </div><!-- ends: .col-lg-10 -->
                <div class="col-lg-10 offset-lg-1">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-calendar-check-o"></span> Images & Video</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <div id="_listing_gallery">
                                <div class="add_listing_form_wrapper" id="gallery_upload">
                                    <div class="form-group text-center">
                                        <!--  add & remove image links -->
                                        <p class="hide-if-no-js">
                                            <a href="#" class="upload-header btn btn-outline-secondary">Upload Preview Image</a>
                                        </p>
                                    </div>
                                    <div class="form-group text-center">
                                        <!-- image container, which can be manipulated with js -->
                                        <div class="listing-img-container">
                                            <img src="<?= base_url('assets/home/'); ?>img/picture.png" alt="No Image Found">
                                            <p>No Images</p>
                                        </div>
                                        <!--  add & remove image links -->
                                        <p class="hide-if-no-js">
                                            <a href="#" id="listing_image_btn" class="btn btn-outline-primary m-right-10">
                                                <span class="dashicons dashicons-format-image"></span> Upload Slider Images
                                            </a><a id="delete-custom-img" class="btn btn-outline-danger hidden" href="#"> Remove Images</a><br>
                                        </p>
                                    </div>
                                </div>
                                <!--ends add_listing_form_wrapper-->
                            </div>
                            <div class="form-group m-top-30">
                                <label for="videourl" class="not_empty form-label">Video Url</label>
                                <input type="text" id="videourl" name="videourl" value="" class="form-control directory_field" placeholder="Only YouTube & Vimeo URLs.">
                            </div>
                        </div><!-- ends: .atbdb_content_module_contents -->
                    </div><!-- ends: .atbd_content_module -->
                </div><!-- ends: .col-lg-10 -->
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="atbd_term_and_condition_area custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                        <input type="checkbox" class="custom-control-input" name="listing_t" value="1" id="listing_t">
                        <label for="listing_t" class="not_empty custom-control-label">I Agree with all <a href="" id="listing_t_c">Terms & Conditions</a></label>
                    </div>
                    <div class="btn_wrap list_submit m-top-25">
                        <button type="submit" class="btn btn-primary btn-lg listing_submit_btn">Submit listing</button>
                    </div>
                </div><!-- ends: .col-lg-10 -->
            </div>
        </div>
    </section><!-- ends: .add-listing-wrapper -->
    </form>