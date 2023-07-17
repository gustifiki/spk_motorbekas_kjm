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

  <body>
    <!-- Section: Design Block -->
    <section class="text-center">
      <!-- Background image -->
      <div class="p-5 bg-image" style="
      background-image: url('../assets/img/fotoregister.jpg');
      height: 250px;
      "></div>
      <!-- Background image -->

      <div class="card mx-4 mx-md-5 shadow-5-strong" style="
      margin-top: -100px;
      background: hsla(0, 0%, 100%, 0.8);
      backdrop-filter: blur(5px);
      ">
      <div class="card-body py-8 px-md-5">

        <div class="row d-flex justify-content-center">
          <div class="col-lg-10">
            <h2 class="fw-bold mb-4">PROFIL</h2>
            <?php 
            $id_user = $_SESSION['id_user'];
            $data = mysqli_query($koneksi, "select * from user where id_user='$id_user'");

            while ($d = mysqli_fetch_array($data)) {
              ?>
              <div class="profile-img">
                  <img style="border:1px solid #eaeaea;border-radius:50px;width: 150px" src="../img_visitor/<?php echo $d['foto_user'] ?>">
            
              </div>

              <label style="font-size:25px;margin-top:10px;" class="col-sm-8">
                <?php echo $d['nama_user']; ?>
              </label>


              <div class="form-outline row" style="margin-bottom: 10px;">
                <label class="col-sm-6 col-form-label">Nama</label>
                <div class="col-sm-6">
                  <input type="text" readonly="on" class="form-control" name="nama_user" required="required" value="<?php echo $d['nama_user']; ?>">
                </div>
              </div>

              <div class="form-outline row" style="margin-bottom: 10px;">
                <label class="col-sm-6 col-form-label">Username</label>
                <div class="col-sm-6">
                  <input type="text" readonly="on" id="username" class="form-control" name="username" required="required" value="<?php echo $d['username']; ?>">
                </div>
              </div>

              <div class="form-outline row" style="margin-bottom: 10px;">
                <label class="col-sm-6 col-form-label">Nomor HP</label>
                <div class="col-sm-6">
                  <input type="text" readonly="on" id="username" class="form-control" name="username" required="required" value="<?php echo $d['no_hp']; ?>">
                </div>
              </div>

              <div class="form-outline mb-3">
                <button class="btn btn-info btn-rounded"><a href="editdata_visitor.php" style="color:#240b36">Ubah Data</a></button>
                <button class="btn btn-info btn-rounded"><a href="beranda.php" style="color:#240b36">Kembali</a></button>
              </div>
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