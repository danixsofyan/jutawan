    <!-- Begin Page Content -->

</br>
    <div class="container-fluid">
    <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="col-lg-6">
    <div class="card shadow mb-4">
    <div class="card-header py-3 ">
    <h4 class="card-title">Export <?= $judul; ?></h4>
    </div>
    <div class="card-body">

    
    <form action="<?= base_url('Admin/cetakExcel'); ?>" method="post">
        <div class="form-group">
            <label for="name" class="col-sm-0 col-form-label">Pilih Tahun</label>
            <select name="tahun" id="tahun" class="form-control">
                <option value="0">Semua Tahun</option>
                <?php foreach ($listTahun as $bk) : ?>
                    <option value="<?= $bk['date']; ?>"><?= $bk['date']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-0 col-form-label">Pilih Bulan</label>
            <select name="bulan" id="bulan" class="form-control">
                <option value="0">Semua Bulan</option>
                <?php foreach ($listBulan as $bk) : ?>
                    <option value="<?= $bk['date']; ?>">
                    <?php 
                switch (true) {
                    case $bk['date'] == 1:
                        print "Januari";
                    break;
                    case $bk['date'] == 2:
                        print "Februari";
                    break;
                    case $bk['date'] == 1:
                        print "Januari";
                    break;
                    case $bk['date'] == 3:
                        print "Maret";
                    break;
                    case $bk['date'] == 4:
                        print "April";
                    break;
                    case $bk['date'] == 5:
                        print "Mei";
                    break;
                    case $bk['date'] == 6:
                        print "Juni";
                    break;
                    case $bk['date'] == 7:
                        print "Juli";
                    break;
                    case $bk['date'] == 8:
                        print "Agustus";
                    break;
                    case $bk['date'] == 9:
                        print "September";
                    break;
                    case $bk['date'] == 10:
                        print "Oktober";
                    break;
                    case $bk['date'] == 11:
                        print "November";
                    break;
                    case $bk['date'] == 12:
                        print "Desember";
                    break;
                };
            ?> 
                    </option>
                </option>
                <?php endforeach; ?>
            </select>
        </div> 

        <div class="form-group">
            <label for="name" class="col-sm-0 col-form-label">Pilih Lokasi</label>
            <select name="lokasi" id="lokasi" class="form-control">
                <option value="0">Semua Lokasi</option>
                <?php foreach ($lokasi as $p) : ?>
                <option value="<?= $p['id']; ?>"><?= $p['nama_lks']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-success mb-3"><i class="fas fa-file-excel"></i> Excel</button>

    </form>  
    
    </div>
    </div>
    </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->