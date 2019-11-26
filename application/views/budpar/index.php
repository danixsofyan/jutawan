<!--Page wrapper  -->
<div class="page-wrapper">
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Bread crumb and right sidebar toggle -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor"><?= $title; ?></h4>
            </div>
        </div>
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- Info box -->
        <div class="card-group" >
            <!-- Column EDUKASI-->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="fas fa-university"></i></h3>
                                    <a href="<?= base_url(); ?>admin/kategoriedukasi/">
                                    <p class="text-muted">EDUKASI</p>
                                     </a>
                                </div>
                                <div class="ml-auto">
                                    <?php foreach ($totaledukasi as $tb) : ?>
                                    <h2 class="counter text-cyan"><?= $tb['total_eduasi']; ?> </h2>
                                    <?php endforeach; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-megna" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Column EDUKASI-->
            <!-- Column BELANJA-->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="fas fa-fw fa-shopping-cart"></i></h3>
                                    <a href="<?= base_url(); ?>admin/kategoribelanja/">
                                    <p class="text-muted">BELANJA</p>
                                    </a>
                                </div>
                                <div class="ml-auto">
                                    <?php foreach ($totalbelanja as $tb) : ?>
                                    <h2 class="counter text-cyan"><?= $tb['total_belanja']; ?></h2>
                                    <?php endforeach; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-megna" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Column BELANJA-->
            <!-- Column MENGINAP-->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="fas fa-fw fa-hotel"></i></h3>
                                    <a href="<?= base_url(); ?>admin/kategorimenginap/">
                                    <p class="text-muted">MENGINAP</p>
                                    </a>
                                </div>
                                <div class="ml-auto">
                                    <?php foreach ($totalmenginap as $tm) : ?>
                                    <h2 class="counter text-cyan"><?= $tm['total_menginap']; ?></h2>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-megna" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Column MENGINAP-->
            <!-- Column SENI DAN BUDAYA-->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="fas fa-fw fa-palette"></i></h3>
                                    <a href="<?= base_url(); ?>admin/kategorisenibudaya/">
                                    <p class="text-muted">SENI DAN BUDAYA</p>
                                </a>
                                </div>
                                <div class="ml-auto">
                                    <?php foreach ($totalsenbud as $tsb) : ?>
                                    <h2 class="counter text-cyan"><?= $tsb['total_senibudaya']; ?></h2>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-megna" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Column SENI DAN BUDAYA-->                   
        </div>
        <!-- End grup -->
        <div class="card-group">
            <!-- Column WISATA-->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="fas fa-fw fa-archway"></i></h3>
                                    <a href="<?= base_url(); ?>admin/kategoriwisata/">
                                    <p class="text-muted">WISATA</p>
                                </a>
                                </div>
                                <div class="ml-auto">
                                    <?php foreach ($totalwisata as $tw) : ?>
                                    <h2 class="counter text-cyan"><?= $tw['total_wisata']; ?></h2>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-megna" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Column WISATA-->
            <!-- Column EKONOMI KREATIF-->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="fas fa-fw fa-star-of-life"></i></h3>
                                    <a href="<?= base_url(); ?>admin/kategoriekraf/">
                                    <p class="text-muted">EKONOMI KREATIF</p>
                                </a>
                                </div>
                                <div class="ml-auto">
                                    <?php foreach ($totalekraf as $tek) : ?>
                                    <h2 class="counter text-cyan"><?= $tek['total_ekraf']; ?></h2>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-megna" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Column EKONOMI KREATIF-->
            <!-- Column TRANSPORTASI-->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="fas fa-fw fa-bus"></i></h3>
                                    <a href="<?= base_url(); ?>admin/kategoritransportasi/">
                                    <p class="text-muted">TRANSPORTASI</p>
                                </a>
                                </div>
                                <div class="ml-auto">
                                    <?php foreach ($totaltransport as $tt) : ?>
                                    <h2 class="counter text-cyan"><?= $tt['total_transport']; ?></h2>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-megna" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Column TRANSPORTASI-->                    
            <!-- Column KULINER-->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="fas fa-fw fa-utensils"></i></h3>
                                    <a href="<?= base_url(); ?>admin/kategorikuliner/">
                                    <p class="text-muted">KULINER</p>
                                </a>
                                </div>
                                <div class="ml-auto">
                                    <?php foreach ($totalkuliner as $tk) : ?>
                                    <h2 class="counter text-cyan"><?= $tk['total_kuliner']; ?></h2>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-megna" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Column WISATA-->
        </div>
        <!-- End Info box -->
        
        <div class="row">
        <!-- Chart Report Jutawan-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Pengunjung Kota Bandung </h4>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Chart Report Jutawan-->
        </div>    


    </div>
    <!-- End Container fluid  -->
</div>
<!-- End Page wrapper-->

      <!-- Page level plugins -->
            <script src="<?= base_url('assets/admin/'); ?>vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="<?= base_url('assets/admin/'); ?>js/demo/chart-area-demo.js"></script>
            <script src="<?= base_url('assets/admin/'); ?>js/demo/chart-pie-demo.js"></script>

            <?php
                foreach($chart as $chart){
                    switch ($chart->m) {
                        case 1:
                                $bulan[] = "Januari";
                                break;
                        case 2:
                                $bulan[] = "Februari";
                                break;
                        case 3:
                                $bulan[] = "Maret";
                                break;
                        case 4:
                                $bulan[] = "April";
                                break;
                        case 5:
                                $bulan[] = "Mei";
                                break;
                        case 6:
                                $bulan[] = "Juni";
                                break;
                            case 7:
                                $bulan[] = "Juli";
                                break;
                        case 8:
                                $bulan[] = "Agustus";
                                break;
                        case 9:
                                $bulan[] = "September";
                                break;
                        case 10:
                                $bulan[] = "Oktober";
                                break;
                        case 11:
                                $bulan[] = "November";
                                break;
                        case 12:
                                $bulan[] = "Desember";
                                break;
                        }                    
                    $jumlah[] = $chart->jumlah;
                }
            ?>
            <script>
            // Area Chart Example
            var ctx = document.getElementById("myAreaChart");
            var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($bulan);?>,
                datasets: [{
                label: "Pengunjung",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: <?php echo json_encode($jumlah);?>,
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
                },
                scales: {
                xAxes: [{
                    time: {
                    unit: 'date'
                    },
                    gridLines: {
                    display: false,
                    drawBorder: false
                    },
                    ticks: {
                    maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                    maxTicksLimit: 5,
                    padding: 10,
                    // Include a dollar sign in the ticks
                    callback: function (value, index, values) {
                        return number_format(value);
                    }
                    },
                    gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                    }
                }],
                },
                legend: {
                display: false
                },
                tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                    return number_format(tooltipItem.yLabel) + ' ' + datasetLabel;
                    }
                }
                }
            }
            });
            </script>

            <script>
                $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });



                $('.form-check-input').on('click', function() {
                    const menuId = $(this).data('menu');
                    const roleId = $(this).data('role');

                    $.ajax({
                        url: "<?= base_url('user/changeaccess'); ?>",
                        type: 'post',
                        data: {
                            menuId: menuId,
                            roleId: roleId
                        },
                        success: function() {
                            document.location.href = "<?= base_url('user/roleaccess/'); ?>" + roleId;
                        }
                    });

                });
            </script>