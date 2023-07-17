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
  <!-- DataTables -->
  <link rel="stylesheet" href="../admin/assets_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../admin/assets_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../admin/assets_admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12 col-lg-8">
              <div class="card shadow mb-4">
                <div class="card-header">
                  <div class="row">
                    <div class="col-lg-6 col-xl-6">
                      <h2 class="mt-2 font-weight-bold text-info"> <b> Data Kriteria </b></h2>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <table border="border-left-info" class="table table-bordered" id="example1" width="100%" cellspacing="0" align="center">
                    <thead class="text-center">
                      <th> Kode Kriteria </th>
                      <th> Kriteria </th>
                      <th> Tipe </th>
                      <th> Bobot </th>
                      <th></th>
                    </thead>
                    <tbody>
                      <?php

                      $query="SELECT * FROM tb_kriteria";
                      $result=$koneksi->query($query);

                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                        <tr>
                          <td align="center"><?php echo $row['kode']; ?></td>
                          <td align="center"><?php echo $row['kriteria']; ?></td>
                          <td align="center"><?php echo $row['tipe_kriteria']; ?></td>
                          <td align="center"><?php echo $row['bobot']; ?></td>
                          <td class="text-center">
                           <div class="btn btn-success btn-icon-split"><a href="edit_data_kriteria.php?id=<?php echo $row['id_kriteria'];?>"><font color="white">Edit</font></a></div>
                       </td>
                        </tr>
                      <?php } ?>

                   </tbody>
                 </table>
               </div>
             </div>
           </div>
         </div>
       </div>
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
