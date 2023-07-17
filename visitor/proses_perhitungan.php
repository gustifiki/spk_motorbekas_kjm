<?php  
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
  <link rel="stylesheet" href="../admin/assets_admin/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../admin/assets_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../admin/assets_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../admin/assets_admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/assets_admin/dist/css/adminlte.min.css">
  <!-- MDB -->
  <link rel="stylesheet" href="../assets/css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="../assets/css/main.css" />
  <link rel="shortcut icon" href="../assets/img/kjmpku.png" />
</head>
<header>
  <style>
    * {box-sizing: border-box;}

    #intro {
      background-image: url("../assets/img/fotoberanda.jpg");
      height: 20vh;
    }

    #navbar {
      background-color: #f1f1f1;
      padding: 20px 10px; /* Large padding which will shrink on scroll (using JS) */
      transition: 0.4s; /* Adds a transition effect when the padding is decreased */
      position: fixed; /* Sticky/fixed navbar */
      width: 100%;
      top: 0; /* At the top */
      z-index: 99;
    }

    /* Style the navbar links */
    #navbar a {
      float: left;
      color: black;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 18px;
      line-height: 25px;
      border-radius: 4px;
    }

    /* Style the logo */
    #navbar #logo {
      font-size: 35px;
      font-weight: bold;
      transition: 0.4s;
    }

    /* Links on mouse-over */
    #navbar a:hover {
      background-color: #ddd;
      color: black;
    }

    /* Style the active/current link */
    #navbar a.active {
      background-color: dodgerblue;
      color: white;
    }

    /* Display some links to the right */
    #navbar-right {
      float: left;
    }

    /* Add responsiveness - on screens less than 580px wide, display the navbar vertically instead of horizontally */
    @media screen and (max-width: 580px) {
      #navbar {
        padding: 20px 10px !important; /* Use !important to make sure that JavaScript doesn't override the padding on small screens */
      }
      #navbar a {
        float: right;
        display: block;
        text-align: left;
      }
      #navbar-right {
        float: left;
      }
    }
  </style>

  <!-- Background image -->
  <div id="intro" class="bg-image shadow-2-strong">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
      <div class="container d-flex align-items-center justify-content-center text-center h-100">
        <div class="text-white">
          <h1 style="margin-top: 10px;"><a href="beranda.php" style="color:#ffff">KJM Pekanbaru</a></h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content">
      <!-- Main content -->
      <section class="content text-center">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h1></h1>
                  <form method="post">
                    <input type="submit" name="kosongkan" value="Cari Motor Lagi" class="btn btn-danger">
                  </form>
                </div>

                <?php
                $sql="SELECT * FROM tb_alternatif";
                $result=$koneksi->query($sql);
                $foto=array();
                $tahun_pembuatan=array();
                $kondisi_mesin=array();
                $kondisi_body=array();
                $konsumsi_bbm=array();
                $jarak_tempuh=array();
                $harga=array();
                while($row=$result->fetch_object()){
                  $foto[$row->id_alternatif]=$row->foto_alternatif;
                  $tahun_pembuatan[$row->id_alternatif]=$row->tahun_pembuatan;
                  $kondisi_mesin[$row->id_alternatif]=$row->kondisi_mesin;
                  $kondisi_body[$row->id_alternatif]=$row->kondisi_body;
                  $konsumsi_bbm[$row->id_alternatif]=$row->konsumsi_bbm;
                  $jarak_tempuh[$row->id_alternatif]=$row->jarak_tempuh;
                  $harga[$row->id_alternatif]=$row->harga;
                }
                ?>

                <?php
                $A=array();
                $sql="SELECT 
                a.id_alt_motor,
                b.nama_alternatif,
                SUM(IF(a.id_kriteria=1,nilai,0)) AS C1,
                SUM(IF(a.id_kriteria=2,nilai,0)) AS C2,
                SUM(IF(a.id_kriteria=3,nilai,0)) AS C3,
                SUM(IF(a.id_kriteria=4,nilai,0)) AS C4,
                SUM(IF(a.id_kriteria=5,nilai,0)) AS C5,
                SUM(IF(a.id_kriteria=6,nilai,0)) AS C6
                FROM
                tb_nilai a
                JOIN tb_alt_motor b USING(id_alt_motor)
                GROUP BY a.id_alt_motor
                ORDER BY a.id_alt_motor
                ";
                $result=$koneksi->query($sql);
                while($row=$result->fetch_object()){
                  $A[$row->id_alt_motor]=$row->nama_alternatif;
                }
                $result->free();
                ?>

                <?php
                $sql="SELECT bobot FROM tb_kriteria ORDER BY id_kriteria";
                $result=$koneksi->query($sql);
                $i=0;
                $W=array();
                while($row=$result->fetch_object()){
                  $W[]=$row->bobot;
                }
                ?>

                <?php
                $sql="SELECT 
                a.id_alt_motor,
                SUM(IF(a.id_kriteria=1,a.nilai,0)) AS C1,
                SUM(IF(a.id_kriteria=2,a.nilai,0)) AS C2,
                SUM(IF(a.id_kriteria=3,a.nilai,0)) AS C3,
                SUM(IF(a.id_kriteria=4,a.nilai,0)) AS C4,
                SUM(IF(a.id_kriteria=5,a.nilai,0)) AS C5,
                SUM(IF(a.id_kriteria=6,a.nilai,0)) AS C6
                FROM
                tb_nilai a
                JOIN tb_kriteria b USING(id_kriteria)
                GROUP BY a.id_alt_motor
                ORDER BY a.id_alt_motor
                ";
                $result=$koneksi->query($sql);
                $X=array(1=>array(),2=>array(),3=>array(),4=>array(),5=>array(),6=>array());
                while($row=$result->fetch_object()){
                  array_push($X[1],round($row->C1,2));
                  array_push($X[2],round($row->C2,2));
                  array_push($X[3],round($row->C3,2));
                  array_push($X[4],round($row->C4,2));
                  array_push($X[5],round($row->C5,2));
                  array_push($X[6],round($row->C6,2));
                }
                $result->free();
                ?>
                <!-- /.card-header -->
                <div class="card-body">
                  <?php 
                  $sql="SELECT 
                  a.id_alt_motor,
                  SUM(
                    IF(
                      a.id_kriteria=1,
                      IF(
                        b.tipe_kriteria='benefit',
                        a.nilai/".max($X[1]).",
                        ".min($X[1])."/a.nilai)
                        ,0)
                        ) AS C1,
                        SUM(
                        IF(
                        a.id_kriteria=2,
                        IF(
                        b.tipe_kriteria='benefit',
                        a.nilai/".max($X[2]).",
                        ".min($X[2])."/a.nilai)
                        ,0)
                        ) AS C2,
                        SUM(
                        IF(
                        a.id_kriteria=3,
                        IF(
                        b.tipe_kriteria='benefit',
                        a.nilai/".max($X[3]).",
                        ".min($X[3])."/a.nilai)
                        ,0)
                        ) AS C3,
                        SUM(
                        IF(
                        a.id_kriteria=4,
                        IF(
                        b.tipe_kriteria='benefit',
                        a.nilai/".max($X[4]).",
                        ".min($X[4])."/a.nilai)
                        ,0)
                        ) AS C4,
                        SUM(
                        IF(
                        a.id_kriteria=5,
                        IF(
                        b.tipe_kriteria='benefit',
                        a.nilai/".max($X[5]).",
                        ".min($X[5])."/a.nilai)
                        ,0)
                        ) AS C5,
                        SUM(
                        IF(
                        a.id_kriteria=6,
                        IF(
                        b.tipe_kriteria='benefit',
                        a.nilai/".max($X[6]).",
                        ".min($X[6])."/a.nilai)
                        ,0)
                        ) AS C6
                        FROM
                        tb_nilai a
                        JOIN tb_kriteria b USING(id_kriteria)
                        GROUP BY a.id_alt_motor
                        ORDER BY a.id_alt_motor
                        ";    
                        $result=$koneksi->query($sql);
                        $R=array();
                        while($row=$result->fetch_object()){
                          $R[$row->id_alt_motor]=array($row->C1,$row->C2,$row->C3,$row->C4,$row->C5,$row->C6);
                        }
                        ?>
                        <?php
                        $V=array();
                        $h=array();
                        $m=count($W);
                        foreach($R as $i=>$r){
                          for($j=0;$j<$m;$j++){
                            $V[$i]=(isset($V[$i])?$V[$i]:0)+$r[$j]*$W[$j];
                            $h[$i]=(isset($h[$i])?"{$h[$i]}":'')."+{$r[$j]}*{$W[$j]}";
                          }
                        }
                        arsort($V);
                        ?>

<!--                          <p>
                          Dari perhitungan diperoleh:<br>
                          <?php
                          foreach($h as $i=>$hsl){
                            echo "V<sub>{$i}</sub>=".substr($hsl,1)."=<strong>{$V[$i]}</strong><br>";
                          }
                          ?>
                        </p> -->
                        <!-- <p>
                          Dengan mengurutkan dari yang terbesar ke yang terkecil diperoleh
                        </p>
                          <table border="border-left-info" class="table table-bordered" id="example1" width="100%" cellspacing="0">
                            <thead>
                              <th>No</th>
                              <th>Alternative</th>
                              <th>Result</th>
                            </thead>
                            <?php
                            $no=0;
                            foreach($V as $i=>$v){
                              echo "<tr class='center'>
                              <td>".(++$no)."</td>
                              <td>A{$i} ({$A[$i]})</td>
                              <td>{$v}</td>
                              </tr>";
                            }
                            ?>
                          </table> -->

                          <?php
                          echo "
                          <main class='mt-2'>
                          <div class='container'>
                          <section class='text-center'>
                          <h5 class='text-center mb-2'>Berikut Hasil Rekomendasi Motor</h5>
                          <div class='row pb-4'>
                          <div class='col-12'>
                          <input type='text' name='searchbox' id='searchbox' class='filterinput form-control' placeholder='Cari Merek Motor'>
                          </div>
                          </div>
                          <div class='row'>
                          ";
                          $no=0;
                          foreach($V as $i=>$v){
                            echo "
                            <div class='col-lg-4 col-md-12' data-role='recipe'>
                            <div class='card mt-4'>
                            <div class='bg-image hover-overlay ripple' data-mdb-ripple-color='light'>
                            <img class='img-fluid' src='../img_data_alternatif/{$foto[$i]}'>
                            <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);''></div>
                            </a>
                            </div>
                            <div class='card-body'>
                            <h5 class='text-center'>Pilihan ".(++$no)."</h5>
                            <h4 class='text-center'>{$A[$i]}</h4>
                            <p class='card-text'>
                            <li>Tahun : {$tahun_pembuatan[$i]}</li>
                            <li>Kondisi Mesin : {$kondisi_mesin[$i]}</li>
                            <li>Kondisi Body : {$kondisi_body[$i]}</li>
                            <li>Konsumsi BBM : {$konsumsi_bbm[$i]} km/liter</li>
                            <li>Jarak Tempuh : {$jarak_tempuh[$i]} km</li>
                            <li>Harga : Rp. {$harga[$i]}</li>
                            </p>
                            </div>
                            </div>
                            </div>                          ";
                          }
                          echo "
                          </div>
                          </section>
                          </div>
                          </main>";
                          ?>
                          <hr>
                          <h5 class="mb-4">Lihat Detail Perangkingan Pada Tiap Motor Pilihan</h5>
                          <button type='button' class='btn btn-info mb-4' data-toggle='collapse' data-target='#demo'>Klik Disini</button>
                          <div id='demo' class='collapse'>
                            <table border="border-left-info" class="table table-bordered" id="example1" width="100%" cellspacing="0">
                              <thead>
                                <th>No</th>
                                <th>Nama Motor</th>
                                <th>Nilai Perangkingan</th>
                              </thead>
                              <?php
                              $no=0;
                              foreach($V as $i=>$v){
                                echo "<tr class='center'>
                                <td>".(++$no)."</td>
                                <td>{$A[$i]}</td>
                                <td>{$v}</td>
                                </tr>";
                              }
                              ?>
                            </table>
                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
              </section>
              <!-- /.content -->
            </div>
            <footer class="bg-light text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2022 Copyright:
              <a class="text-dark">KJM Pekanbaru</a>
            </div>
            <!-- Copyright -->
          </footer>
            <!-- /.content-wrapper -->
            <?php  
            if (isset($_POST['kosongkan'])) {

              $sql_k_tb_alt_motor = "TRUNCATE TABLE tb_alt_motor";
              $koneksi->query($sql_k_tb_alt_motor);
              $sql_k_tb_nilai = "TRUNCATE TABLE tb_nilai";
              $koneksi->query($sql_k_tb_nilai);

              echo "<script>window.location.href = \"carimotor.php\"</script>";

            }
            ?>
            <!-- /.control-sidebar -->
          </div>
          <!-- ./wrapper -->
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
          <script>
            $(document).ready(function() {
              $("#searchbox").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $('div[data-role="recipe"]').filter(function() {
                  $(this).toggle($(this).find('h4').text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
          </script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        </body>
        </html>
