    <!-- Begin Page Content -->
    <div class="container-fluid">
    <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Lokasi</h6>
    </div>

    <div class="card-body">
    <div class="table-responsive" >
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            <th>No</th>
            <th>Nama Lokasi</th>
            <th>Pengelola</th>
            <th>Total Kunjungan</th>
            <th>Terakhir Update</th>
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
        <?php foreach ($lokasi as $l) : ?>
            <tr>
            <th scope="row"><?= $i; ?></th>
            <td><a href="<?= base_url(); ?>listing/detail/<?= $l['id']; ?>"><?= $l['nama_lks']; ?></a></td>
            <td><?= $l['name']; ?></td>
            <td><?= $l['total_pengunjung']; ?></td>
            <td><?= date_format(date_create($l['date_update']),"d-F-Y"); ?></td>
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