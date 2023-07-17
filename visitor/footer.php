<!--Footer-->
<footer class="bg-light text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark">KJM Pekanbaru</a>
  </div>
  <!-- Copyright -->
</footer>
<!--Footer-->
<script type="text/javascript" src="../assets/js/mdb.min.js"></script>
<script type="text/javascript" src="../assets/js/style.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<!-- jQuery -->
  <script src="../admin/assets_admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../admin/assets_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="../admin/assets_admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../admin/assets_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../admin/assets_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../admin/assets_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../admin/assets_admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../admin/assets_admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../admin/assets_admin/plugins/jszip/jszip.min.js"></script>
  <script src="../admin/assets_admin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../admin/assets_admin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../admin/assets_admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../admin/assets_admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../admin/assets_admin/dist/js/adminlte.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>
</html>