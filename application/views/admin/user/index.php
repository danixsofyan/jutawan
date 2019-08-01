    <!-- Begin Page Content -->
    <div class="container-fluid">

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add Data</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Users</h6>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Hak Akses</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
        </thead>        
        <tfoot>
            <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Hak Akses</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
        <?php foreach ($alluser as $a) : ?>
            <tr>
            <td><?= $a['id']; ?></td>
            <td><?= $a['name']; ?></td>
            <td><?= $a['email']; ?></td>
            <td ><?= $a['role']; ?></td>
            <td><?php  
                if($a['is_active'] == 1){
                    echo "Aktif";
                }else{
                    echo "Non Aktif";
                }
            ?></td>
            <td>
            <a href="" class="badge badge-success">edit</a>
            <a href="" class="badge badge-danger">delete</a>
            </td>
            </tr>
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