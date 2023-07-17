<?php 
include 'header.php';
?>
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
  <link rel="stylesheet" href="../assets/css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/main.css" />

  <body>
    <!-- Section: Design Block -->
    <section class="text-center">
      <!-- Background image -->
      <div class="p-5 bg-image" style="
      background-image: url('../assets/img/fotoregister.jpg');
      height: 380px;
      "></div>
      <!-- Background image -->

      <div class="card mx-4 mx-md-5 shadow-5-strong" style="
      margin-top: -100px;
      background: hsla(0, 0%, 100%, 0.8);
      backdrop-filter: blur(5px);
      ">
      <div class="card-body py-10 px-md-5">

        <div class="row d-flex justify-content-center">
          <div class="col-lg-6">
            <h2 class="fw-bold mb-4">Profil</h2>
            <h3 class="mb-4">Edit Data</h3>
            <?php 
            $id_user = $_SESSION['id_user'];
            $data = mysqli_query($koneksi, "select * from user where id_user='$id_user'");

            while ($d = mysqli_fetch_array($data)) {
              ?>
              <form action="proses_editvisitor.php" method="post" enctype="multipart/form-data">
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="hidden" name="nama_user" value="<?php echo $d['nama_user']; ?>"></input>
                      <input type="text" name="nama_user" id="nama_user" class="form-control" value="<?php echo $d['nama_user']; ?>"/>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="hidden" name="username" value="<?php echo $d['username']; ?>"></input>
                      <input type="text" name="username" id="username" class="form-control" value="<?php echo $d['username']; ?>"/>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Password</label><br><small>Kosongkan jika tidak ingin mengubah password</small>
                      <input type="hidden" name="password" value="<?php echo $d['password']; ?>"></input>
                      <input type="password"  name="password" id="password" class="form-control"/>
                    </div>

                    <div class="form-group mb-4">
                      <label for="exampleInputEmail1">Nomor Handphone</label>
                      <input type="hidden" name="no_hp" value="<?php echo $d['no_hp']; ?>"></input>
                      <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?php echo $d['no_hp']; ?>"/>
                    </div>

                    <div class="form-outline mb-4">Masukkan Foto Anda
                      <input type="file" id="file" name="file" class="form-control" />
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <?php  
      }
      ?>
    </section>
    <!-- Section: Design Block -->
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
  </html>

  <?php 
  include 'footer.php';
?>