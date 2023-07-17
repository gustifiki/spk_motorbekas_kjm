<?php  
include 'header.php';
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../assets/css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="../assets/css/main.css" />
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="shortcut icon" href="../assets/img/kjmpku.png" />
    <!-- DataTables -->
  <link rel="stylesheet" href="../admin/assets_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../admin/assets_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../admin/assets_admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/assets_admin/dist/css/adminlte.min.css">
</head>
<body>
  <!--Main Navigation-->
  <header>
    <style>
      * {box-sizing: border-box;}

      #intro {
        background-image: url("../assets/img/fotoberanda.jpg");
        height: 100vh;
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
            <h1 class="mb-3">KJM Pekanbaru</h1>
            <h5 class="mb-4">Menjual Motor Bekas Berkualitas</h5>
            <a class="btn btn-outline-light btn-lg m-2" href="../visitor/galerimotor.php" role="button"
            target="_blank">Galeri Motor</a>
            <a class="btn btn-outline-light btn-lg m-2" href="../visitor/carimotor.php" target="_blank"
            role="button">Cari Motor</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5">
    <div class="container">
      <!--Section: Content-->
      <section>

  <h2>[4] Perangkingan</h2>
  <p>
    Hasil akhir diperoleh dari proses perankingan yaitu penjumlahan dari perkalian 
    matriks ternormalisasi R dengan vektor bobot W sehingga diperoleh nilai terbesar 
    yang dipilih sebagai alternatif terbaik (Ai) sebagai solusi
  </p>
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
    <p>
        Dari perhitungan diperoleh:<br>
        <?php
        foreach($h as $i=>$hsl){
        echo "V<sub>{$i}</sub>=".substr($hsl,1)."=<strong>{$V[$i]}</strong><br>";
        }
        ?>
    </p>
    <p>
    Dengan mengurutkan dari yang terbesar ke yang terkecil diperoleh
    </p>
  <p>
    <table class="table table-bordered table-striped">
      <caption>
        Hasil Perangkingan
      </caption>
      <tr>
        <th>No</th>
        <th>Alternative</th>
        <th>Result</th>
      </tr>
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
    </table>
  </p>
      </section>
      <!--Section: Content-->
    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <?php  
  include 'footer.php';
  ?>
</body>
</html>