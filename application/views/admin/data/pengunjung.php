    <!-- Begin Page Content -->
    <div class="container-fluid">
    <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newUserModal">Tambah Data</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pengunjung</h6>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
            <th>No</th>
            <th>Laporan Bulan</th>
            <th>Nama Lokasi</th>
            <th>Tanggal upload</th>
            <th>Action</th>
            </tr>
        </thead>        
        <!-- <tfoot>
            <tr>
            <th>No</th>
            <th>Laporan Bulan</th>
            <th>Nama Lokasi</th>
            <th>Dibuat</th>
            <th>Action</th>
            </tr>
        </tfoot> -->
        <tbody>
        <?php $i = 1; ?>
        <?php foreach ($pengunjung as $p) : ?>
            <tr>
            <th scope="row"><?= $i; ?></th>
            <td>
            <?php 
                switch (true) {
                    case $p['m'] == 1:
                        print "Januari";
                    break;
                    case $p['m'] == 2:
                        print "Februari";
                    break;
                    case $p['m'] == 1:
                        print "Januari";
                    break;
                    case $p['m'] == 3:
                        print "Maret";
                    break;
                    case $p['m'] == 4:
                        print "April";
                    break;
                    case $p['m'] == 5:
                        print "Mei";
                    break;
                    case $p['m'] == 6:
                        print "Juni";
                    break;
                    case $p['m'] == 7:
                        print "Juli";
                    break;
                    case $p['m'] == 8:
                        print "Agustus";
                    break;
                    case $p['m'] == 9:
                        print "September";
                    break;
                    case $p['m'] == 10:
                        print "Oktober";
                    break;
                    case $p['m'] == 11:
                        print "November";
                    break;
                    case $p['m'] == 12:
                        print "Desember";
                    break;
                };
            ?>
            </td>
            <td><?= $p['nama_lks']; ?></td>
            <td ><?= date_format(date_create($p['date_created']),"d-F-Y"); ?></td>
            <td>
            <a data-toggle="modal" data-target="#editUserModal<?= $p['id']; ?>" class="badge badge-success text-white"><i class="far fa-edit"></i> Ubah</a>
            <a onclick="return confirm('yakin menghapus data?')" href="<?= base_url(); ?>data/deletedata/<?= $p['id']; ?>" class="badge badge-danger text-white"><i class="far fa-trash-alt"></i> Hapus</a>
            </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
        </table>
    </div>
    </div>
    </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->