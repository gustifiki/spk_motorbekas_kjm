<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Login KJM Pekanbaru</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="assets/css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="assets/css/main.css" />
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="shortcut icon" href="assets/img/kjmpku.png" />
</head>
<body>
  <section class="h-100 gradient-form" style="background-color: #240b36;">
    <div class="container py-10 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center" style="margin-bottom: -30px;">
                    <img src="assets/img/kjmpku.png"
                    style="width: 150px;" alt="logo">
                  </div>

                  <form action="ceklogin.php" method="post">
                    <h4 style="margin-bottom: 30px;"><center>Selamat Datang di KJM Pekanbaru</center></h4>
                    <div class="form-outline mb-4">
                      <input type="text" name="username" id="form2Example11" class="form-control"
                      placeholder="Username" required />
                      <label class="form-label" for="form2Example11">Username</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" name="password" id="password-field" class="form-control" required/>
                      <label class="form-label" for="form2Example22">Password</label>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="">Login</button>
                    </div>       
                  </form>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Tidak Punya Akun?</p>
                    <button class="btn btn-outline-danger"><a href="register.php" style="color:#240b36">Daftar disini!</a></button>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-1">KJM Pekanbaru</h4>
                  <p class="small mb-1">
                  <i class="fas fa-phone"></i> 0822 9992 9826
                  <br>
                  <i class="fab fa-tiktok"></i> @kjm_pekanbaru
                  <br>
                  <i class="fab fa-facebook"></i> KJM Pekanbaru
                  <br>
                  <i class="fab fa-instagram"></i> @kjm_pekanbaru
                  <br>
                  <i class="fas fa-map-marker-alt"></i> Jl. Soekarno - Hatta No. 2 Pekanbaru
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MDB -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>
</html>