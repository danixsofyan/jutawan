

    <!-- Begin Page Content -->
    <div class="container-fluid">
    <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newPengunjungModal"><i class="fas fa-plus"></i> Tambah Data</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pengunjung <?= $user['name']; ?></h6>
    </div>

    <div class="card-body">
    <div class="table-responsive" >
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            <th>No</th>
            <th>Nama Lokasi</th>
            <th>Laporan Bulan</th>
            <th>Jumlah Pengunjung</th>
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
            <td><?= $p['nama_lks']; ?></td>
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
            <td><?= $p['jumlah']; ?></td>
            <td ><?= date_format(date_create($p['date_update']),"d-F-Y"); ?></td>
            <td>
            <a data-toggle="modal" data-target="#editPengunjungModal<?= $p['id']; ?>" class="badge badge-success text-white"><i class="far fa-edit"></i> Ubah</a>
            <a onclick="return confirm('yakin menghapus data?')" href="<?= base_url(); ?>data/deletepengunjung/<?= $p['id']; ?>" class="badge badge-danger text-white"><i class="far fa-trash-alt"></i> Hapus</a>
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

    <!-- Modal Add Pengunjung-->
    <div class="modal fade" id="newPengunjungModal" tabindex="-1" role="dialog" aria-labelledby="newPengunjungModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newPengunjungModalLabel">Tambah Data Pengunjung</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('data'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title" class="form-label">Lokasi</label>
                            <select name="id_lokasi" id="id_lokasi" class="form-control">
                                <option value="">Pilih Lokasi</option>
                                <?php foreach ($lokasi as $p) : ?>
                                <option value="<?= $p['id']; ?>"><?= $p['nama_lks']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>  
                        <div class="form-group">
                            <label for="title" class="form-label">Jumlah Pengunjung</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah pengunjung">
                        </div>
                        <label for="title" class="form-label">Bulan</label>
                        <div class="input-group mb-3">
                            <input id="datepicker" name="datepicker" class="form-control" placeholder="Pilih Bulan">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="far fa-calendar-alt"></i></span>
                            </div>
                        </div>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Modal Edit Pengunjung-->
    <?php foreach ($pengunjung as $p) : ?>
    <div class="modal fade" id="editPengunjungModal<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="newPengunjungModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editPengunjungModalLabel">Edit Data Pengunjung</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('data/editPengunjung'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah pengunjung" value="<?= $p['nama_lks']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="title" class="form-label">Jumlah Pengunjung</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $p['id']; ?>">
                            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah pengunjung" value="<?= $p['jumlah']; ?>" required>
                        </div>
                        <label for="title" class="form-label">Bulan</label>
                        <div class="input-group mb-3">
                            <input type="hidden" class="form-control" id="date_created" name="date_created" value="<?= $p['date_created']; ?>">
                            <input id="editDatepicker" name="editdatepicker" class="form-control" placeholder="Pilih Bulan" value="<?= $p['date']; ?>" required>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="far fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    <script>
        var endYear = new Date(new Date().getFullYear(), 11, 31);
        $('#datepicker').datepicker({
            format: 'yyyy/m/d',
            endDate: endYear,
            startView: 'months',
            minViewMode: 'months',
            maxViewMode: 'years',
            autoclose: true
        });
    </script>

    <script>
        var endYear = new Date(new Date().getFullYear(), 11, 31);
        $('#editDatepicker').datepicker({
            format: 'yyyy/m/d',
            endDate: endYear,
            startView: 'months',
            minViewMode: 'months',
            maxViewMode: 'years',
            autoclose: true
        });
    </script>

    <script>
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
        } );
        table.buttons().container()
            .appendTo( '#example_wrapper .col-md-6:eq(0)' );
    } );
    </script>