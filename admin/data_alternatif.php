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
                    <h2 class="mt-2 font-weight-bold text-info"> <b> Data Motor KJM Pekanbaru </b></h2>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <a class="btn btn-info mb-4" href="tambah_data_alternatif.php">Tambah Data Motor</a>
                <table border="border-left-info" class="table table-bordered" id="example1" width="100%" cellspacing="0">
                  <thead class="text-center">
                    <th>No</th>
                    <th>Nama Motor</th>
                    <th>Tahun Pembuatan</th>
                    <th>Kondisi Mesin</th>
                    <th>Kondisi Body</th>
                    <th>Konsumsi BBM (Km/liter)</th>
                    <th>Jarak Tempuh (Km)</th>
                    <th>Harga (Rp)</th>
                    <th>Foto</th>
                    <th></th>
                  </thead>
                  <tbody>
                    <?php
                    $sql  = "SELECT * FROM tb_alternatif ORDER BY id_alternatif ASC";
                    $result = $koneksi->query($sql);
                    $no=1;
                    while ($row=$result->fetch_assoc()) { ?>
                      <tr>
                        <td align="center"><?php echo $no++ ?></td>
                        <td align="center"><?php echo $row['nama_alternatif']; ?></td>
                        <td align="center"><?php echo $row['tahun_pembuatan']; ?></td>
                        <td align="center"><?php echo $row['kondisi_mesin']; ?></td>
                        <td align="center"><?php echo $row['kondisi_body']; ?></td>
                        <td align="center"><?php echo $row['konsumsi_bbm']; ?></td>
                        <td align="center"><?php echo $row['jarak_tempuh']; ?></td>
                        <td align="center"><?php echo $row['harga']; ?></td>
                        <td align="center"><img src="../img_data_alternatif/<?php echo $row['foto_alternatif']; ?>" style="width: 100px ;"></td>
                        <td class="text-center">
                          <?php
                          if ($row['id_alternatif'] != 0){ 
                           ?>
                           <div class="btn btn-success btn-icon-split"><a href="edit_data_alternatif.php?id=<?php echo $row['id_alternatif'];?>"><font color="white">Edit</font></a></div>
                          <hr>
                           <div class="btn btn-danger btn-icon-split"><a href="proses_hapus_data_alternatif.php?id=<?php echo $row['id_alternatif'];?>"><font color="white">Hapus</font></a></div>
                         <?php } ?>
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
