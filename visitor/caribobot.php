<?php 
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>KJM Pekanbaru</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../assets/css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/main.css" />
  <link rel="shortcut icon" href="../assets/img/kjmpku.png" />
  <body>
    <!-- Section: Design Block -->
    <section>
      <!-- Background image -->
      <div class="p-5 bg-image" style="
      background-image: url('../assets/img/fotocari_motor.jpg');
      height: 210px;
      "></div>
      <!-- Background image -->

      <div class="card mx-4 mx-md-5 shadow-5-strong" style="
      margin-top: -100px;
      background: hsla(0, 0%, 100%, 0.8);
      backdrop-filter: blur(30px);
      ">
      <div class="card-body py-10 px-md-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6">
            <h2 class="fw-bold text-center">KJM Pekanbaru</h2>
            <h3 class="text-center">Cari Motor</h3>
            <form method="post" action="datakriteria.php">
              <?php
              $ambildata = mysqli_query($koneksi,"select * from tb_kriteria") or die (mysqli_error($koneksi));
              while($tampil = mysqli_fetch_array($ambildata)){
                echo "
                <div class='card mt-4' hidden>
                <div class='card-body'>
                <h5 class='card-title' hidden>$tampil[kriteria]</h5>
                <p class='card-text' value='$tampil[bobot]' hidden>test</p>
                <div class='form-check'>
                <input class='form-check-input' name='id[]' type='checkbox' value='$tampil[id_kriteria]' id='flexCheckChecked' checked hidden/>
                </div>
                </div>
                </div>
                ";
              }
              ?>
              <input type="submit" name="proses" value="Proses Update" style="margin-top:5px">
            </form>
          </section>
          <!-- Section: Design Block -->
          <?php  
          include 'footer.php';
          ?>
          <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
          <!-- Custom scripts -->
          <script type="text/javascript"></script>
        </body>
      </head>
      </html>
