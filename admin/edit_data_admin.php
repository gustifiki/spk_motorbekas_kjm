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
              <h1>Edit Data Profil</h1>
              <div class="card card-primary">
                <div class="card-header">

                </div>
                <!-- form start -->
                <?php 
                $id_user = $_SESSION['id_user'];
                $data = mysqli_query($koneksi, "select * from user where id_user='$id_user'");

                while ($d = mysqli_fetch_array($data)) {
                  ?>
                  <form action="prosesedit_admin.php" method="post" enctype="multipart/form-data">
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama</label>
                          <input type="hidden" name="nama_user" value="<?php echo $d['nama_user']; ?>"></input>
                          <input type="text" name="nama_user" id="nama_user" class="form-control" value="<?php echo $d['nama_user']; ?>"/>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Username</label>
                          <input type="hidden" name="username" value="<?php echo $d['username']; ?>"></input>
                          <input type="text" name="username" id="username" class="form-control" value="<?php echo $d['username']; ?>"/>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Password</label><br><small>Kosongkan jika tidak ingin mengubah password</small>
                          <input type="hidden" name="password" value="<?php echo $d['password']; ?>"></input>
                          <input type="password"  name="password" id="password" class="form-control"/>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Nomor Handphone</label>
                          <input type="hidden" name="no_hp" value="<?php echo $d['no_hp']; ?>"></input>
                          <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?php echo $d['no_hp']; ?>"/>
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
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </form>
                  </div>

                  <?php  
                }
                ?>
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
