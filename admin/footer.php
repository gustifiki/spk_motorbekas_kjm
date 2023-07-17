<footer class="main-footer">
    <strong>© 2022 Copyright : <a>KJM Pekanbaru</a>
  </div>
</footer>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets_admin/plugins/jquery/jquery.min.js"></script>
<script src="assets_table/js/bootstrap.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets_admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="assets_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="assets_admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="assets_admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="assets_admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assets_admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets_admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets_admin/plugins/moment/moment.min.js"></script>
<script src="assets_admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assets_admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="assets_admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets_admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets_admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets_admin/dist/js/pages/dashboard.js"></script>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets_admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets_admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets_admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="assets_admin/dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": true
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
