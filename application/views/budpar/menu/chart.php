<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor"><?= $title; ?></h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Grafik</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Data Pengunjung Kota Bandung</h4>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Admin/chart'); ?>" method="post">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group has-success">
                                        <select name="kategori" id="kategori" class="form-control">
                                            <option value="0">Semua Kategori</option>
                                            <?php foreach ($kategori as $k) : ?>
                                            <option value="<?= $k['idk']; ?>"><?= $k['nmk']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="form-control-feedback"> Pilih Kategori </small> </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group has-success">
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
                                        <small class="form-control-feedback"> Pilih Bulan </small> </div>

                                </div>
                                <div class="col-md-2">
                                    <div class="form-group has-success">
                                        <select name="tahun" id="tahun" class="form-control">
                                            <option value="0">Semua Tahun</option>
                                            <?php foreach ($listTahun as $bk) : ?>
                                                <option value="<?= $bk['date']; ?>"><?= $bk['date']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="form-control-feedback"> Pilih Tahun </small> </div>

                                </div>

                                <div class="col-md-2">
                                    <div class="form-group has-success">
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fas fa-filter"></i> Filter</button>
                                    </div>
                                    </div>
                                </div>

                        </div>
                        <hr>
 



                    