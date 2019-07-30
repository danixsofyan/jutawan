        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2019 Dinas Budaya dan Pariwisata Kota Bandung
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url('assets/admin/'); ?>node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?= base_url('assets/admin/'); ?>node_modules/popper/popper.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url('assets/admin/'); ?>js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('assets/admin/'); ?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('assets/admin/'); ?>js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('assets/admin/'); ?>js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="<?= base_url('assets/admin/'); ?>node_modules/raphael/raphael-min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>node_modules/morrisjs/morris.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="<?= base_url('assets/admin/'); ?>node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="<?= base_url('assets/admin/'); ?>node_modules/toast-master/js/jquery.toast.js"></script>
        <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Chart JS -->
    <script src="<?= base_url('assets/admin/'); ?>node_modules/echarts/echarts-all.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>node_modules/echarts/echarts-init.js"></script>
    <!-- menu -->
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });



        $('.form-check-input').on('click', function() {
            const menuId = $(this).data('menu');
            const roleId = $(this).data('role');

            $.ajax({
                url: "<?= base_url('admin/changeaccess'); ?>",
                type: 'post',
                data: {
                    menuId: menuId,
                    roleId: roleId
                },
                success: function() {
                    document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                }
            });

        });
    </script>
</body>
</html>