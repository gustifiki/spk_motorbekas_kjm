<?php  
include 'header.php';
include '../koneksi.php';
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
        <main class="mt-5">
          <div class="container">
            <!--Section: Content-->
            <section>
              <h1>Edit Data Kriteria</h1>
              <div class="card card-primary">
                <div class="card-header">

                </div>
                <!-- form start -->
                <?php 
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "select * from tb_kriteria where id_kriteria='$id'");

                while ($d = mysqli_fetch_array($data)) {
                  ?>
                  <form action="proses_edit_data_kriteria.php" method="get" enctype="multipart/form-data">
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Kode</label>
                          <input type="hidden" name="id_kriteria" value="<?php echo $d['id_kriteria']; ?>">
                          <input type="text" name="kode" id="kode" class="form-control" value="<?php echo $d['kode']; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Kriteria</label>
                          <input type="text" name="kriteria"class="form-control" value="<?php echo $d['kriteria']; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tipe</label>
                          <input type="text" name="tipe_kriteria" id="tipe_kriteria" class="form-control" value="<?php echo $d['tipe_kriteria']; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Bobot</label>
                          <input type="text" name="bobot" id="bobot" class="form-control" value="<?php echo $d['bobot']; ?>" required/>
                        </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>

                  <?php  
                }
                ?>
              </section>
              <!--Section: Content-->
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
