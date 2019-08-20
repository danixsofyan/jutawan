<form action="<?= base_url(''); ?>" method="post">
<div class="container-fluid">
<!-- Basic Card Example -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Export Laporan</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="title" class="form-label">Tahun</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="">Pilih Tahun</option>
                            <option value="1">2017</option>
                            <option value="2">2018</option>
                            <option value="3">2019</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Bulan</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="">Pilih Bulan</option>
                            <option value="0">Semua Bulan</option
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
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
                    <div class="form-group">
                        <label for="title" class="form-label">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="">Pilih Kategori</option>
                            <option value="0">Semua Kategori</option>
                            <option value="1">Edukasi</option>
                            <option value="2">Belanja</option>
                            <option value="3">Menginap</option>
                            <option value="4">Seni Budaya</option>
                            <option value="5">Wisata</option>
                            <option value="6">Ekonomi Kreatif</option>
                            <option value="7">Transportasi</option>
                            <option value="8">Kuliner</option>
                        </select>
                    </div>
                    <!-- Cetak Excel -->
                    <a oneclick="" class="btn btn-success mb-3 mt-3" href="<?= base_url('Data/cetakExcel'); ?>"><i class="fas fa-file-excel"></i> Export</a>
                    </form>
                    <!-- <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary listing_submit_btn"><i class="far fa-file-alt"></i>  Export</button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</div>