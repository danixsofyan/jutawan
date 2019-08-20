            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Dinas Kebudayaan & Pariwisata Kota Bandung <?= date('Y'); ?> - Developed by <a href="http://digdaya.co">Digdaya</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="<?= base_url('assets/admin/'); ?>vendor/jquery/jquery.min.js"></script>
            <script src="<?= base_url('assets/admin/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?= base_url('assets/admin/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url('assets/admin/'); ?>js/sb-admin-2.min.js"></script>

            <!-- Page dataTables -->
            <script src="<?= base_url('assets/admin/vendor/datatables/'); ?>jquery.dataTables.min.js"></script>
            <script src="<?= base_url('assets/admin/vendor/datatables/'); ?>dataTables.bootstrap4.min.js"></script>
            <script src="<?= base_url('assets/admin/vendor/datatables/'); ?>datatables-demo.js"></script>
            <script src="<?= base_url('assets/admin/vendor/datatables/'); ?>dataTables.buttons.min.js"></script>
            <script src="<?= base_url('assets/admin/vendor/datatables/'); ?>buttons.bootstrap4.min.js"></script>
            <script src="<?= base_url('assets/admin/vendor/datatables/'); ?>jszip.min.js"></script>
            <script src="<?= base_url('assets/admin/vendor/datatables/'); ?>pdfmake.min.js"></script>
            <script src="<?= base_url('assets/admin/vendor/datatables/'); ?>vfs_fonts.js"></script>
            <script src="<?= base_url('assets/admin/vendor/datatables/'); ?>buttons.html5.min.js"></script>
            <script src="<?= base_url('assets/admin/vendor/datatables/'); ?>buttons.print.min.js"></script>
            <script src="<?= base_url('assets/admin/vendor/datatables/'); ?>buttons.colVis.min.js"></script>

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

            </body>

            </html> 