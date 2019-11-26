<div class="page-wrapper">
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
    <?php foreach ($berdasarkankategori as $k) : ?>
    <h4 class="text-themecolor">Tabel <?= $k['name']; ?></h4>
    <?php endforeach; ?>
    </div>

    <div class="card-body">
    <div class="table-responsive" >
    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Total Kunjungan</th>
            </tr>
        </thead>      
        <tbody>
        <?php $i = 1; ?>
        <?php foreach ($berdasarkankategori as $k) : ?>
            <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $k['lks']; ?></td>
            <td><?= $k['jmlh']; ?></td>
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
</div>

    

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