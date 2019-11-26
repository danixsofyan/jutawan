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
    <h4 class="text-themecolor"><?= $title; ?></h4>
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
        <?php foreach ($allkategori as $ak) : ?>
            <tr>
            <th scope="row"><?= $i; ?></th>
            <td><a href="<?= base_url(); ?>admin/kategori/<?= $ak['id']; ?>"><?= $ak['name']; ?></a></td>
            <td><?= $ak['jmlh']; ?></td>
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