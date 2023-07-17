<?php  
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KJM Pekanbaru</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets_admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="assets_admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="assets_admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets_admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets_admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets_admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="assets_admin/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <main>
  <div class="container">
    <!--Section: Content-->
    <section>
      <h2>Data Preferensi</h2>
      <a class="btn btn-primary" href="proses_referensi.php" style="margin-bottom: 10px">Proses Nilai Preferensi</a>
<table class="table table-bordered" style="margin-top: 20px">
  <thead>
    <tr class="text-center">
      <th width="5px">ID Preferensi</th>
      <th width="10px">Nama Alternatif</th>
      <th width="10px">Nilai Preferensi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include '../koneksi.php';
   $sql = mysqli_query($koneksi, "SELECT * FROM tb_preferensi, tb_normalisasi, tb_alternatif WHERE tb_preferensi.`id_preferensi` = tb_normalisasi.`id_preferensi` AND tb_normalisasi.`id_alternatif` = tb_alternatif.`id_alternatif` ORDER BY nilai_preferensi DESC");
    while($row = mysqli_fetch_array($sql)) {
     ?>
     <tr>
      <td class="text-center"><?php echo $row['id_preferensi']; ?></td>
      <td><?php echo $row['nama_alternatif']; ?></td>
      <td><?php echo $row['nilai_preferensi']; ?></td>
    </tr>
    <?php
  }
  $koneksi->close();
  ?>
</tbody>
</table>
    </section>
    <hr class="my-5" />
  </div>
</main>
        <!-- /.row -->
      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
<?php  
include 'footer.php';
?>
</body>
</html>
