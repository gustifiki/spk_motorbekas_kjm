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
            <h4 class="text-center">Kriteria Prioritas Motor Bekas</h3>
              <p class="text-center">Silahkan Pilih Kriteria Motor Bekas Yang Anda Inginkan</p>

            <form method="post" action="proses_edit_data_kriteria.php">
              <?php

              $id = $_POST['id'];
$jum = count($id); //menghitung jumlah ID yang dipilih

for ($i=0; $i<$jum; $i++) { // Proses Looping

  $ambildata = mysqli_query($koneksi,"select * from tb_kriteria where id_kriteria='$id[$i]'")
  or die (mysqli_error($koneksi));

  while($tampil = mysqli_fetch_array($ambildata)){

    echo "
    <div class='form-group mb-4'>
    <label class='form-label'>$tampil[kriteria]</label>
    <select name='bobot[]' class='form-control'  required>
    <option value='$tampil[bobot]'>Pilihan Anda</option>
    <option value='20'>Sangat Prioritas</option>
    <option value='15'>Prioritas</option>
    <option value='5'>Cukup Prioritas</option>
    <option value='0'>Tidak Prioritas</option>
    </select>
    </div>
    <input type='hidden' name='id[]' value='$tampil[id_kriteria]'>
    ";    
  }
}
?> 
</table>

<input type="hidden" name="jum" value="<?php echo $jum; ?>">

<button type="submit" name="proses" value="proses" class="btn btn-primary btn-block mb-4">
  Selanjutnya
</button> 
</form>
<div class="text-center">
  <button class="btn btn-danger btn-block mb-4"><a href="beranda.php" style="color:#ffff">Kembali</a></button>
</div>
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