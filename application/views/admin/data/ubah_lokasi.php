    <?= form_open_multipart('data/save'); ?>
    <section class="add-listing-wrapper border-bottom section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-user"></span>Informasi Umum</h4>
                                <a href="<?= base_url('data/lokasi'); ?>" class="btn btn-danger mb-3">Kembali</a>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $list['id']; ?>">
                                <label for="title" class="form-label">Nama Lokasi</label>
                                <input type="text" class="form-control" id="namalks" name="namalks" placeholder="Nama Lokasi" value="<?= $list['nama_lks']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Kategori</label>
                                <select name="kategori" id="kategori" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    <?php foreach( $kategori as $k ) : ?>
                                        <?php if( $k['id'] == $list['kategori'] ) : ?>
                                            <option value="<?= $k['id']; ?>" selected><?= $k['name']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $k['id']; ?>"><?= $k['name']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="desc" class="form-label">Deskripsi</label>
                                <textarea id="desc" rows="8" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi lokasi"><?= $list['deskripsi']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tagline" class="form-label">Tagline</label>
                                <input type="text" class="form-control" id="tagline" name="tagline" placeholder="Tagline atau Motto" value="<?= $list['tagline']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Harga Tiket</label>                                    
                                <div class="pricing-option-inputs">
                                    <input type="text" id="tiket" name="tiket" class="form-control" placeholder="Contoh: 10000" value="<?= $list['tiket']; ?>">                                        
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="desc" class="form-label">Oprational</label>
                                <textarea id="desc" rows="8" class="form-control" id="oprational" name="oprational" placeholder="Contoh : Senin 07.00 - 17.00"><?= $list['oprational']; ?></textarea>
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
                                <input type="text" placeholder="Alamat" id="alamat" name="alamat" class="form-control" value="<?= $list['alamat']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="phone_number" class="form-label">Nomer Telepon</label>
                                <input type="text" placeholder="Nomor Telepon" id="notlp" name="notlp" class="form-control" value="<?= $list['no_tlp']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="contact_email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?= $list['email']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="website_address" class="form-label">Website</label>
                                <input type="hidden" class="form-control" id="sosmed" name="sosmed" value="<?= $list['sosmed']; ?>">
                                <input type="url" id="website" name="website" class="form-control" placeholder="Contoh Format: http://example.com" value="<?= $list['website']; ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Social Media</label>
                                <div id="social_info_sortable_container">
                                    <div class="directorist atbdp_social_field_wrapper">
                                        <div class="row m-bottom-20" id="social-form-fields">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <?php foreach ($sosmed as $s) : ?>                         
                                                    <input type="hidden" class="form-control" id="idsosmed" name="idsosmed" value="<?= $s['id']; ?>">
                                                    <?php endforeach; ?>
                                                    <label for="bdbh_saturday" class="not_empty">Instagram</label>
                                                    <input type="url" class="form-control directory_field atbdp_social_input" placeholder="Format: http://example.com" required="" id="instagram" name="instagram" value="<?= $list['instagram']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="bdbh_saturday" class="not_empty">Facebook</label>
                                                    <input type="url" class="form-control directory_field atbdp_social_input" placeholder="Format: http://example.com" required="" id="facebook" name="facebook" value="<?= $list['facebook']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="bdbh_saturday" class="not_empty">Twitter</label>
                                                    <input type="url" class="form-control directory_field atbdp_social_input" placeholder="Format: http://example.com" required="" id="twitter" name="twitter" value="<?= $list['twitter']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="website_address" class="form-label">Foto sampul</label>
                                    <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img src="<?= base_url('assets/admin/img/cover/') . $list['photo']; ?>" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image" name="image" value="<?= $list['photo']; ?>">
                                                    <label class="custom-file-label" for="image">Pilih file</label>
                                                </div>
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
                    <button type="submit" class="btn btn-primary listing_submit_btn">Ubah Lokasi</button>
                    </div>
                    <div class="btn_wrap list_submit m-top-25">
                        
                    </div>
                </div><!-- ends: .col-lg-10 -->
            </div>
        </div>
    </section><!-- ends: .add-listing-wrapper -->
    </form>
</div>