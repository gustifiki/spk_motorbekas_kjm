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
              <input class="btn btn-primary btn-lg btn-block" type="submit" name="proses" value="Cari Motor" style="margin-top:5px">
            </form>
              

 
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
      <div class="row">
        <div class="text-center">
          <div class="bg-image hover-overlay ripple rounded-5" data-mdb-ripple-color="light">
            <img src="../assets/img/spk.png" class="img-fluid" />
          </div>
        </div>

        <div class="">
          <h4 class="text-center mt-4"><strong>Sistem Pendukung Keputusan</strong></h4>
          <p class="text-justify">
            Sistem Pendukung Keputusan (SPK) adalah atau <i>Decision Support System</i> (DSS) adalah sebuah sistem yang mampu memberikan kemampuan pemecahan masalah maupun kemampuan pengkomunikasian untuk masalah dengan kondisi semi terstruktur dan tak terstruktur. Sistem ini digunakan untuk membantu pengambilan keputusan dalam situasi semi terstruktur dan situasi yang tidak terstruktur, dimana tak seorangpun tahu secara pasti bagaimana keputusan seharusnya dibuat.
          </p>
        </div>
      </div>
    </section>
    <!--Section: Content-->

    <hr/>

    <div class="row">
      <div class="text-center">
        <div class="bg-image hover-overlay ripple rounded-5" data-mdb-ripple-color="light">
          <img src="../assets/img/kjmpku.png" class="img-fluid" width="200px" />
        </div>
      </div>
      <div class="mb-5">
        <p class="text-justify mb-5">
          KJM Pekanbaru merupakan perusahaan yang bergerak dibidang penjualan 
          motor bekas. Selain menjual motor bekas, KJM Pekanbaru menyediakan suku 
          cadang, aksesoris dan perbaikan motor. KJM Pekanbaru berlokasi di Kelurahan 
          Tobekgodang, Kecamatan Tampan, Kota Pekanbaru, Provinsi Riau. KJM Pekanbaru didirikan oleh Toni MS sejak tanggal 14 September 2017 
          yang diawali dengan penjualan motor bekas dari mulut ke mulut dan penjualan via 
          marketplace online. KJM merupakan singkatan dari King Jaya Motor. Seiring 
          berjalannya waktu, KJM Pekanbaru mulai diminati karna stok motor bekas semakin bertambah banyak. Kemudian tahun 2020 pendiri dari KJM Pekanbaru yaitu Toni 
          MS memberanikan diri untuk menyewa ruko untuk menyimpan stok motor bekas 
          yang terletak di Jalan Suka Karya, Kelurahan Tobekgodang, Kecamatan Tampan, 
          Kota Pekanbaru, Provinsi Riau. Langkah selanjutnya KJM Pekanbaru akan 
          membuka cabang di Jalan Adi Sucipto Pekanbaru.
        </p>
      </div>
    </div>
  </section>
  <!--Section: Content-->
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