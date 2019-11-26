    <footer class="footer-three footer-dark">
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-bottom--content">
                            <a href="http://www.disbudpar.bandung.go.id/" class="footer-logo"><img src="<?= base_url('assets/home/'); ?>img/stunning.png" alt="" style="width: 250px; height: auto;"></a>
                            <p class="m-0 copy-text">© Dinas Kebudayaan & Pariwisata Kota Bandung 2019.</a></p>
                            <ul class="list-unstyled lng-list">
                                <li><a href="http://instagram.com/disbudpar.bdg"><span class="instagram"><i class="fab fa-instagram"></i></span> disbudpar.bdg</a></li>
                                <!-- <li><a href="">English</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ends: .footer-bottom -->
    </footer><!-- ends: .footer -->
    <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login_modal_label"><i class="la la-lock"></i> Masuk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                <div class="modal-body">
                    <form action="/" id="login-form">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>" required>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="keep_signed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                            <!-- <input type="checkbox" class="custom-control-input" name="keep_signed_in" value="1" id="keep_signed_in">
                            <label for="keep_signed_in" class="not_empty custom-control-label">Keep me signed in</label> -->
                        </div>
                        <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Masuk</button>
                    </form>
                    <!-- <div class="form-excerpts">
                        <ul class="list-unstyled">
                            <li>Not a member? <a href="">Sign up</a></li>
                            <li><a href="">Recover Password</a></li>
                        </ul>
                        <div class="social-login">
                            <span>Or connect with</span>
                            <p><a href="" class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i> Facebook</a><a href="" class="btn btn-outline-danger"><i class="fab fa-google-plus-g"></i> Google</a></p>
                        </div>
                    </div> -->
                </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
    <!-- inject:js-->
    <script src="<?= base_url('assets/home/'); ?>vendor_assets/js/jquery/jquery-1.12.3.js"></script>
    <script src="<?= base_url('assets/home/'); ?>vendor_assets/js/bootstrap/popper.js"></script>
    <script src="<?= base_url('assets/home/'); ?>vendor_assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/home/'); ?>vendor_assets/js/jquery-ui.min.js"></script>
    <script src="<?= base_url('assets/home/'); ?>vendor_assets/js/jquery.barrating.min.js"></script>
    <script src="<?= base_url('assets/home/'); ?>vendor_assets/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url('assets/home/'); ?>vendor_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('assets/home/'); ?>vendor_assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url('assets/home/'); ?>vendor_assets/js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('assets/home/'); ?>vendor_assets/js/masonry.pkgd.min.js"></script>
    <script src="<?= base_url('assets/home/'); ?>vendor_assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/home/'); ?>vendor_assets/js/select2.full.min.js"></script>
    <script src="<?= base_url('assets/home/'); ?>vendor_assets/js/slick.min.js"></script>
    <script src="<?= base_url('assets/home/'); ?>theme_assets/js/locator.js"></script>
    <script src="<?= base_url('assets/home/'); ?>theme_assets/js/main.js"></script>
    <script src="<?= base_url('assets/home/'); ?>theme_assets/js/map.js"></script>
    <!-- endinject-->
    <!-- Chart JS -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>js/Chart.js/chartjs.init.js"></script>
    <script src="<?= base_url('assets/eliteadmin/'); ?>js/Chart.js/Chart.min.js"></script>

    <?php
        if($chart != null){
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
        }
        else{
            print"Data Pengunjung Kosong";
        }
    ?>
    <script>
        var ctx1 = document.getElementById("chart1").getContext("2d");
        var data1 = {
            labels: <?php echo json_encode($bulan);?>,
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(152,235,239,0.8)",
                    strokeColor: "rgba(152,235,239,0.8)",
                    pointColor: "rgba(152,235,239,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(152,235,239,1)",
                    data: <?php echo json_encode($jumlah);?>
                }

            ]
        };
    </script>
</body>

</html>