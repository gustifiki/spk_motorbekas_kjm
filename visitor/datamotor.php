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

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white">
            <h1 style="margin-top: 80px;">Data Alternatif</h1>
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
        <table class="table table-bordered" style="margin-top: 20px">
          <thead>
            <tr class="text-center">
              <th width="80px">Kode Alternatif</th>
              <th width="200px">Nama Alternatif</th>
              <th width="200px">Foto</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT*FROM tb_alternatif ORDER BY id_alternatif ASC";
            $result = $koneksi->query($sql);
            while($row = $result->fetch_assoc()) {
             ?>
             <tr>
              <td class="text-center"><?php echo $row['id_alternatif']; ?></td>
              <td><?php echo $row['nama_alternatif']; ?></td>
              <td class="text-center"><img style="border:1px solid #eaeaea; border-radius:50px; width: 150px" src="../img_data_alternatif/<?php echo $row['foto_alternatif'] ?>"></td>
            </tr>
            <?php
          }
          $koneksi->close();
          ?>
        </tbody>
      </table>
    </section>
  </div>
</main>
<!--Main layout-->

<!--Footer-->
<?php  
include 'footer.php';
?>
</body>
</html>