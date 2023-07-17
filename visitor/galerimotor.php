<?php  
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>KJM Pekanbaru</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../assets/css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="../assets/css/main.css" />
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="shortcut icon" href="../assets/img/kjmpku.png" />
</head>
<body>
  <!--Main Navigation-->
  <header>
    <style>
      * {box-sizing: border-box;}

      #intro {
        background-image: url("../assets/img/fotoberanda.jpg");
        height: 40vh;
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
    <?php
    $sql="SELECT * FROM tb_alternatif";
    $result=$koneksi->query($sql);
    while($row=$result->fetch_object()){
      $row->nama_alternatif;
      $row->foto_alternatif;
      $row->tahun_pembuatan;
      $row->kondisi_mesin;
      $row->kondisi_body;
      $row->konsumsi_bbm;
      $row->jarak_tempuh;
      $row->harga;
    }
    ?>
    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white">
            <h1 style="margin-top: 80px;">KJM Pekanbaru</h1>
            <h5 class="mb-2">Menjual Motor Bekas Berkualitas</h5>
          </div>
        </div>
      </div>
    </div>

    <?php
    echo "
    <main class='mt-2'>
    <div class='container'>
    <section class='text-center'>
    <h1 class='mb-4'><strong>Galeri Motor</strong></h1>
    <div class='row'>
    ";
    $no=0;
    $result=$koneksi->query($sql);
    while($row=$result->fetch_object()){
      echo "
      <div class='col-lg-4 col-md-12 mb-4'>
      <div class='card mt-4'>
      <div class='bg-image hover-overlay ripple' data-mdb-ripple-color='light'>
      <img class='img-fluid' src='../img_data_alternatif/{$row->foto_alternatif}'>
      <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);''></div>
      </a>
      </div>
      <div class='card-body'>
      <h4 class='text-center'>{$row->nama_alternatif}</h4>
      <p class='card-text'>
      <li>Tahun : {$row->tahun_pembuatan}</li>
      <li>Kondisi Mesin : {$row->kondisi_mesin}</li>
      <li>Kondisi Body : {$row->kondisi_body}</li>
      <li>Konsumsi BBM :  {$row->konsumsi_bbm} km/liter</li>
      <li>Jarak Tempuh :  {$row->jarak_tempuh} km</li>
      <li>Harga : Rp. {$row->harga} </li>
      </p>
      </div>
      </div>
      </div>
      ";
    }
    echo "
    </div>
    </section>
    </div>
    </main>";
    ?>
    <!-- Background image -->
  </header>
  <!--Footer-->
  <?php  
  include 'footer.php';
  ?>
</body>
</html>