<!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
        
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <?php foreach ($pengunjung as $k) : ?>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pengunjung</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $k['jumlah_pengunjung']; ?></div>
                <?php endforeach; ?> 
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            
            <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <?php foreach ($kunjungan as $p) : ?>                    
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="<?= base_url('data'); ?>">Kunjungan Anda</div>
                    
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $p['jumlah_kunjungan']; ?></div>
                <?php endforeach; ?> 
                </div>
                <div class="col-auto">
                    <i class="fas fa-eye fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div></a>            
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <?php foreach ($kelola_lokasi as $l) : ?>                    
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="<?= base_url('data/lokasi'); ?>">Lokasi yang dikelola</div>
                    <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $l['jumlah_lokasi']; ?></div>
                    </div>
                    </div>
                <?php endforeach; ?> 
                </div>
                <div class="col-auto">
                    <i class="fas fa-map-marker-alt fa-2x text-gray-300"></i>
                </div>
                </div></a>
            </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <?php foreach ($update as $u) : ?>
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Terakhir Update</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= date("F Y", strtotime($u['date']));?></div>
                <?php endforeach; ?> 
                </div>
                <div class="col-auto">
                    <i class="fas fa-history fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- Content Row -->

        <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Pengunjung <?= $user['name']; ?> <?= date('Y'); ?></h6>
                <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Opsi</div>
                    <a class="dropdown-item" href="#">Selengkapnya</a>
                </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                <canvas id="myAreaChart"></canvas>
                </div>
            </div>
            </div>
        </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 