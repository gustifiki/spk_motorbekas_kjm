<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Daftar Akun KJM Pekanbaru</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="assets/css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="shortcut icon" href="assets/img/kjmpku.png" />
<body>
<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('assets/img/fotoregister.jpg');
        height: 230px;
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
          <h2 class="fw-bold mb-4">Selamat Datang di KJM Pekanbaru</h2>
          <h3 class="mb-4">Register</h3>
          <form action="cekregistrasi.php" class="signin-form" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" name="nama_user" id="nama_user" class="form-control" required/>
              <label class="form-label" for="form3Example3">Nama Anda</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" name="username" id="username" class="form-control" required />
              <label class="form-label">Username</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password" id="password" class="form-control" required/>
              <label class="form-label">Password</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" name="no_hp" id="no_hp" class="form-control" required/>
              <label class="form-label">Nomor Handphone</label>
            </div>

            <div class="form-outline mb-4">Inputkan Foto Anda
              <input type="file" name="file" class="form-control" required/>
              <label class="form-label"></label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Sign up
            </button>
          </form>
          <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Sudah Punya Akun?</p>
                    <a href="index.php">Login Disini!</a>
                  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
<script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>