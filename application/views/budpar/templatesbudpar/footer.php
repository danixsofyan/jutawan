        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            Copyright &copy; Dinas Kebudayaan & Pariwisata Kota Bandung <?= date('Y'); ?>
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
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src=".<?= base_url('assets/eliteadmin/'); ?>node_modules/popper/popper.min.js"></script>
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/raphael/raphael-min.js"></script>
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/morrisjs/morris.min.js"></script>

    <!--morris JavaScript -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- This is data table -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->

    <!-- Popup message jquery -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->

    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/toast-master/js/jquery.toast.js"></script>
        <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Chart JS -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/echarts/echarts-all.js"></script>
    <script src="<?= base_url('assets/eliteadmin/'); ?>node_modules/echarts/echarts-init.js">
    </script>

    <!-- JS Data -->
    <script src="<?= base_url('assets/eliteadmin/'); ?>js/chartbudpar/chartkunjungan.js"></script>



 <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>

    
</body>

</html>