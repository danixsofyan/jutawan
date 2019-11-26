<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Kunjungan Wisatawan</h4>
                <h6 class="card-subtitle">Dinas Budaya dan Pariwisata Kota Bandung</h6>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lokasi</th>
                                <th>Pengelola</th>
                                <th>Kategori</th>
                                <th>Laporan Tahun</th>
                                <th>Lapuran Bulan</th>
                                <th>Jumlah Kunjungan</th>
                                <th>Tanggal Input</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Lokasi</th>
                                <th>Pengelola</th>
                                <th>Kategori</th>
                                <th>Laporan Tahun</th>
                                <th>Lapuran Bulan</th>
                                <th>Jumlah Kunjungan</th>
                                <th>Tanggal Input</th>
                            </tr>
                        </tfoot>
                        <tbody>
							<?php $i = 1; ?>
	                        <?php foreach ($kunjungan as $k) : ?>
	                            <tr>
	                            <th scope="row"><?= $i; ?></th>
	                            <td><?= $k['nama_lks']; ?></td>
	                            <td><?= $k['name']; ?></td>
	                            <td><?= $k['nm']; ?></td>
	                            <td><?= $k['y']; ?></td>
	                            <td>
	                            <?php 
	                                switch (true) {
	                                    case $k['m'] == 1:
	                                        print "Januari";
	                                    break;
	                                    case $k['m'] == 2:
	                                        print "Februari";
	                                    break;
	                                    case $k['m'] == 3:
	                                        print "Maret";
	                                    break;
	                                    case $k['m'] == 4:
	                                        print "April";
	                                    break;
	                                    case $k['m'] == 5:
	                                        print "Mei";
	                                    break;
	                                    case $k['m'] == 6:
	                                        print "Juni";
	                                    break;
	                                    case $k['m'] == 7:
	                                        print "Juli";
	                                    break;
	                                    case $k['m'] == 8:
	                                        print "Agustus";
	                                    break;
	                                    case $k['m'] == 9:
	                                        print "September";
	                                    break;
	                                    case $k['m'] == 10:
	                                        print "Oktober";
	                                    break;
	                                    case $k['m'] == 11:
	                                        print "November";
	                                    break;
	                                    case $k['m'] == 12:
	                                        print "Desember";
	                                    break;
	                                };
	                            ?>
	                            </td>
	                            <td><?= $k['jumlah']; ?></td>
	                            <td><?= date_format(date_create($k['date_update']),"d-F-Y"); ?></td>
	                            </tr>
	                            <?php $i++; ?>
	                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->