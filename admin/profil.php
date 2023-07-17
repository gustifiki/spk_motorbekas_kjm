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
              <h1 class="text-center">Profil</h1>
              <div class="card card-primary">
                
                <!-- form start -->
                <?php 
                $id_user = $_SESSION['id_user'];
                $data = mysqli_query($koneksi, "select * from user where id_user='$id_user'");

                while ($d = mysqli_fetch_array($data)) {
                  ?>
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                        src="../img_admin/<?php echo $d['foto_user'] ?>">
                      </div>

                      <h3 class="profile-username text-center"><?php echo $d['nama_user']; ?></h3>

                      <p class="text-muted text-center"><?php echo $d['level']; ?></p>

                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>Nama</b> <a class="float-right"><?php echo $d['nama_user']; ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Username</b> <a class="float-right"><?php echo $d['username']; ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Nomor Handphone</b> <a class="float-right"><?php echo $d['no_hp']; ?></a>
                        </li>
                      </ul>

                      <a href="edit_data_admin.php" class="btn btn-primary btn-block"><b>Edit Data</b></a>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
                <?php  
              }
              ?>
            </section>
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
