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
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <main>
          <div class="container">
            <!--Section: Content-->
            <section>
              <h1>Tambah Data Motor</h1>
              <div class="card card-primary">
                <div class="card-header">

                </div>
                <!-- form start -->
                <form action="proses_tambah_motor.php" method="post" enctype="multipart/form-data">
                  <form>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Motor</label>
                        <input type="text" name="nama_alternatif" class="form-control" required/>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Pembuatan</label>
                        <input type="text" name="tahun_pembuatan" class="form-control" required/>
                      </div>

                      <div class="form-group mb-4">
                        <label class="form-label">Kondisi Mesin</label>
                        <select name="kondisi_mesin" class="form-control"  required>
                          <option value="Sangat Bagus">Sangat Bagus</option>
                          <option value="Bagus">Bagus</option>
                          <option value="Cukup Bagus">Cukup Bagus</option>
                          <option value="Cukup">Cukup</option>
                          <option value="Kurang Bagus">Kurang Bagus</option>
                        </select>
                      </div>

                      <div class="form-group mb-4">
                        <label class="form-label">Kondisi Body</label>
                        <select name="kondisi_body" class="form-control"  required>
                          <option value="Sangat Bagus">Sangat Bagus</option>
                          <option value="Bagus">Bagus</option>
                          <option value="Cukup Bagus">Cukup Bagus</option>
                          <option value="Cukup">Cukup</option>
                          <option value="Kurang Bagus">Kurang Bagus</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Konsumsi BBM (km/liter)</label>
                        <input type="text" name="konsumsi_bbm" class="form-control" required/>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jarak Tempuh (km)</label>
                        <input type="number" name="jarak_tempuh" class="form-control" required/>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Harga (Rp.)</label>
                        <input type="number" name="harga" class="form-control" required/>
                      </div>

                      <div class="form-group">
                        <label class="exampleInputEmail1">Masukkan Foto Motor</label>
                        <input type="file" name="file" class="form-control" required/>
                      </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>

              </div>
            </main>
            <!-- /.row -->
          </div>
          <!-- /.card-footer -->
        </div>
        <?php  
        include 'footer.php';
        ?>
      </body>
      </html>


