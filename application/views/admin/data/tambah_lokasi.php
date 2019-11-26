    <?= form_open_multipart('data/tambahlokasi'); ?>
    <section class="add-listing-wrapper border-bottom section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-user"></span>Informasi Umum</h4>
                                <a href="<?= base_url('data/lokasi'); ?>" class="btn btn-danger mb-3">Kembali</a>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <div class="form-group">
                                <label for="title" class="form-label">Nama Lokasi</label>
                                <input type="text" class="form-control" id="namalks" name="namalks" placeholder="Nama Lokasi" value="<?= set_value('namalks'); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Kategori</label>
                                <select name="kategori" id="kategori" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    <?php foreach ($kategori as $k) : ?>
                                    <option value="<?= $k['id']; ?>"><?= $k['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="desc" class="form-label">Deskripsi</label>
                                <textarea id="desc" rows="8" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi lokasi"><?= set_value('deskripsi'); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tagline" class="form-label">Tagline</label>
                                <input type="text" class="form-control" id="tagline" name="tagline" placeholder="Tagline atau Motto" value="<?= set_value('tagline'); ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Harga Tiket</label>                                    
                                <div class="pricing-option-inputs">
                                    <input type="text" id="tiket" name="tiket" class="form-control" placeholder="Contoh: 10000" value="<?= set_value('tiket'); ?>">                                        
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="desc" class="form-label">Oprational</label>
                                <textarea id="desc" rows="8" class="form-control" id="oprational" name="oprational" placeholder="Contoh : Senin 07.00 - 17.00"><?= set_value('oprational'); ?></textarea>
                            </div>                              
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
                        <div class="form-group">
                                <label for="phone_number" class="form-label">Alamat</label>
                                <input type="text" placeholder="Alamat" id="alamat" name="alamat" class="form-control" value="<?= set_value('alamat'); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="phone_number" class="form-label">Nomer Telepon</label>
                                <input type="text" placeholder="Nomor Telepon" id="notlp" name="notlp" class="form-control" value="<?= set_value('notlp'); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="contact_email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="website_address" class="form-label">Website</label>
                                <input type="text" id="website" name="website" class="form-control" placeholder="Contoh Format: http://example.com" value="<?= set_value('website'); ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Social Media</label>
                                <div id="social_info_sortable_container">
                                    <div class="directorist atbdp_social_field_wrapper">
                                        <div class="row m-bottom-20" id="social-form-fields">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <?php foreach ($sosmed as $s) : ?>                         
                                                    <input type="hidden" class="form-control" id="idsosmed" name="idsosmed" value="<?= $s['id']+1; ?>">
                                                    <?php endforeach; ?>
                                                    <label for="bdbh_saturday" class="not_empty">Instagram</label>
                                                    <input type="url" class="form-control directory_field atbdp_social_input" placeholder="Format: http://example.com" required="" id="instagram" name="instagram" value="<?= set_value('instagram'); ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="bdbh_saturday" class="not_empty">Facebook</label>
                                                    <input type="url" class="form-control directory_field atbdp_social_input" placeholder="Format: http://example.com" required="" id="facebook" name="facebook" value="<?= set_value('facebook'); ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="bdbh_saturday" class="not_empty">Twitter</label>
                                                    <input type="url" class="form-control directory_field atbdp_social_input" placeholder="Format: http://example.com" required="" id="twitter" name="twitter" value="<?= set_value('twitter'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ends: .atbdb_content_module_contents -->
                    </div><!-- ends: .atbd_content_module -->
                </div><!-- ends: .col-lg-10 -->
                
                <div class="col-lg-10 offset-lg-1">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-calendar-check-o"></span> Foto Sampul</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="<?= base_url('assets/admin/img/cover/default.jpg')?>" class="img-thumbnail">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Pilih file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div><!-- ends: .atbdb_content_module_contents -->
                    </div><!-- ends: .atbd_content_module -->
                </div><!-- ends: .col-lg-10 -->
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="atbd_term_and_condition_area custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                    <button type="submit" class="btn btn-primary listing_submit_btn">Simpan Lokasi</button>
                    </div>
                    <div class="btn_wrap list_submit m-top-25">
                        
                    </div>
                </div><!-- ends: .col-lg-10 -->
            </div>
        </div>
    </section><!-- ends: .add-listing-wrapper -->
    </form>
</div>