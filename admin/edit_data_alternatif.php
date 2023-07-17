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
              <h1>Edit Data Alternatif</h1>
              <div class="card card-primary">
                <div class="card-header">

                </div>
                <!-- form start -->
                <?php 
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "select * from tb_alternatif where id_alternatif='$id'");

                while ($d = mysqli_fetch_array($data)) {
                  ?>
                  <form action="proses_edit_data_alternatif.php" method="post" enctype="multipart/form-data">
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Alternatif</label>
                          <input type="hidden" name="id_alternatif" value="<?php echo $d['id_alternatif']; ?>">
                          <input type="text" name="nama_alternatif" id="nama_alternatif" class="form-control" value="<?php echo $d['nama_alternatif']; ?>"/>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Tahun Pembuatan</label>
                          <input type="text" name="tahun_pembuatan"class="form-control" value="<?php echo $d['tahun_pembuatan']; ?>"/>
                        </div>

                        <div class="form-group">
                          <label class="form-label">Kondisi Mesin</label>
                          <select name="kondisi_mesin" class="form-control"  required>
                            <option value="<?php echo $d['kondisi_mesin']; ?>"><?php echo $d['kondisi_mesin']; ?></option>
                            <option value="Sangat Bagus">Sangat Bagus</option>
                            <option value="Bagus">Bagus</option>
                            <option value="Cukup Bagus">Cukup Bagus</option>
                            <option value="Cukup">Cukup</option>
                            <option value="Kurang Bagus">Kurang Bagus</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Kondisi Body</label>
                          <select name="kondisi_body" class="form-control"  required>
                            <option value="<?php echo $d['kondisi_body']; ?>"><?php echo $d['kondisi_body']; ?></option>
                            <option value="Sangat Bagus">Sangat Bagus</option>
                            <option value="Bagus">Bagus</option>
                            <option value="Cukup Bagus">Cukup Bagus</option>
                            <option value="Cukup">Cukup</option>
                            <option value="Kurang Bagus">Kurang Bagus</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Konsumsi BBM (km/liter)</label>
                          <input type="text" name="konsumsi_bbm" id="konsumsi_bbm" class="form-control" value="<?php echo $d['konsumsi_bbm']; ?>"/>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Jarak Tempuh (km)</label>
                          <input type="text" name="jarak_tempuh" id="jarak_tempuh" class="form-control" value="<?php echo $d['jarak_tempuh']; ?>"/>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Harga (Rp.)</label>
                          <input type="text" name="harga" id="harga" class="form-control" value="<?php echo $d['harga']; ?>"/>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Masukkan Foto</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="file">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                          </div>
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
