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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index: 2000;">
      <div class="container-fluid" id="navbar">
        <a id="logo" href="../visitor/beranda.php">
          <img style="margin-top:-20px; margin-bottom:-25px; margin-right: 10px" src="../assets/img/kjmpku.png" alt="Logo" width="80">
        </a>
        <div class="navbar-right">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="../visitor/beranda.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../visitor/galerimotor.php">Galeri Motor</a>
            </li>
            <li class="nav-item dropdown">
              <a
              class="nav-link dropdown-toggle"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
              >Data</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="#">Data Kriteria</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../visitor/datamotor.php">Data Alternatif</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Hasil Analisa</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="nav-link" href="../visitor/profilkjm.php">Tentang</a>
            </li>
            <li class="nav-item dropdown">
              <a
              class="nav-link dropdown-toggle"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
              >Profil</a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="../visitor/profil_visitor.php">Profil anda</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../visitor/datamotor.php">Edit Profil</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Log out</a>
                </li>
              </ul>
            </li>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>
<!-- Navbar -->

<!-- Background image -->
<div id="intro" class="bg-image shadow-2-strong">
  <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
    <div class="container d-flex align-items-center justify-content-center text-center h-100">
      <div class="text-white">
        <h1 class="mb-3">KJM Pekanbaru</h1>
        <h5 class="mb-4">Menjual Motor Bekas Berkualitas</h5>
        <a class="btn btn-outline-light btn-lg m-2" href="../visitor/galerimotor.php" role="button"
        target="_blank">Galeri Motor</a>
        <a class="btn btn-outline-light btn-lg m-2" href="../visitor/galerimotor.php" target="_blank"
        role="button">Tentang KJM Pekanbaru</a>
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
        <div class="col-md-6 gx-5 mb-4">
          <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
            <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
        </div>

        <div class="col-md-6 gx-5 mb-4">
          <h4><strong>Facilis consequatur eligendi</strong></h4>
          <p class="text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
            eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
            sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
          </p>
          <p><strong>Doloremque vero ex debitis veritatis?</strong></p>
          <p class="text-muted">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
            nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
            alias, unde optio accusantium soluta, iusto molestiae adipisci et?
          </p>
        </div>
      </div>
    </section>
    <!--Section: Content-->

    <hr class="my-5" />

    <!--Section: Content-->
    <section class="text-center">
      <h4 class="mb-5"><strong>Facilis consequatur eligendi</strong></h4>

      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section: Content-->

    <hr class="my-5" />
    <!--Section: Content-->
  </div>
</main>
<!--Main layout-->

<!--Footer-->
<footer class="bg-light text-lg-start">
  <hr class="m-0" />
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark">KJM Pekanbaru</a>
  </div>
  <!-- Copyright -->
</footer>
<!--Footer-->
<script type="text/javascript" src="../assets/js/mdb.min.js"></script>
<script type="text/javascript" src="../assets/js/style.js"></script>
</body>
</html>