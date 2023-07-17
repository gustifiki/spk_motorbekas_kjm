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
            <h3 class="text-center">Cari Motor</h3>

            <form class="signin-form" method="post">

              <div class="form-row">

                <div class="form-group mb-4">
                  <label class="form-label">Tahun Pembuatan</label>
                  <select name="kriteria_tahun_pembuatan" class="form-control"  required>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                  </select>
                </div>

                <div class="form-group mb-4">
                  <label class="form-label">Kondisi Mesin</label>
                  <select name="kriteria_kondisi_mesin" class="form-control"  required>
                    <option value="Sangat Bagus">Sangat Bagus</option>
                    <option value="Bagus">Bagus</option>
                    <option value="Cukup Bagus">Cukup Bagus</option>
                    <option value="Cukup">Cukup</option>
                    <option value="Kurang Bagus">Kurang Bagus</option>
                  </select>
                </div>

                <div class="form-group mb-4">
                  <label class="form-label">Kondisi Body</label>
                  <select name="kriteria_kondisi_body" class="form-control"  required>
                    <option value="Sangat Bagus">Sangat Bagus</option>
                    <option value="Bagus">Bagus</option>
                    <option value="Cukup Bagus">Cukup Bagus</option>
                    <option value="Cukup">Cukup</option>
                    <option value="Kurang Bagus">Kurang Bagus</option>
                  </select>
                </div>

                <div class="form-group mb-4">
                  <label class="form-label">Konsumsi BBM</label>
                  <select name="kriteria_konsumsi_bbm" class="form-control"  required>
                    <option value=">= 58"> Sangat Irit</option>
                    <option value=">= 45 && <= 58">Irit</option>
                      <option value="<= 45">Cukup Irit</option>
                      </select>
                    </div>

                    <div class="form-group mb-4">
                      <label class="form-label">Jarak Tempuh</label>
                      <select name="kriteria_jarak_tempuh" class="form-control"  required>
                        <option value="<= 5000">Kurang dari 5.000 km</option>
                          <option value=">= 5001 && <= 10000">5.001 km s/d 10.000 km</option>
                            <option value=">= 10001 && <= 15000">10.001 km s/d  15.000 km</option>
                              <option value=">= 15001 && <= 20000">15.001 km s/d 20.000 km</option>
                                <option value=">= 20001">Lebih dari 20.001 km</option>
                              </select>
                            </div>

                            <div class="form-group mb-4">
                              <label class="form-label">Harga</label>
                              <select name="kriteria_harga" class="form-control"  required>
                                <option value=">= 29000001">Lebih dari Rp. 29.000.001</option>
                                <option value=">= 25000001 && <= 29000000">Rp. 25.000.001 s/d Rp. 29.000.000</option>
                                <option value=">= 21000001 && <= 25000000">Rp. 21.000.001 s/d Rp. 25.000.000</option>
                                <option value=">= 17000001 && <= 21000000">Rp. 17.000.001 s/d Rp. 21.000.000</option>
                                <option value="< 17000000">Kurang dari Rp. 17.000.000</option>
                              </select>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" name="proses" value="proses" class="btn btn-primary btn-block mb-4">
                              Cari Motor
                            </button>
                          </div>
                        </input>
                      </form>
                    </div>
                  </div>
                </div>
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
        <?php include '../koneksi.php'; ?>
        <?php
        if (isset($_POST['proses'])) { 

          $tahun_pembuatan   = $_POST['kriteria_tahun_pembuatan'];
          $kondisi_mesin = $_POST['kriteria_kondisi_mesin'];
          $kondisi_body   = $_POST['kriteria_kondisi_body'];
          $konsumsi_bbm   = $_POST['kriteria_konsumsi_bbm'];
          $jarak_tempuh   = $_POST['kriteria_jarak_tempuh'];
          $harga   = $_POST['kriteria_harga'];

  // $sql    = "SELECT * FROM tb_alternatif ORDER BY tahun_pembuatan AND kondisi_mesin AND kondisi_body AND konsumsi_bbm AND jarak_tempuh AND harga LIMIT 3";

          $sql = "SELECT *  FROM tb_alternatif WHERE ( harga <= '$harga' AND tahun_pembuatan = '$tahun_pembuatan' ) LIMIT 6";

          $result = $koneksi->query($sql);
          $no     = 1;

          $data_post = [];
          while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $data_post[] = array(
              'id_alt_motor' => $row['id_alternatif'],
              'id_alternatif' => $row['id_alternatif'],
              'nama_alternatif'    => $row['nama_alternatif'],
              'tahun_pembuatan'       => $row['tahun_pembuatan'],
              'kondisi_mesin'         => $row['kondisi_mesin'],
              'kondisi_body'         => $row['kondisi_body'],
              'konsumsi_bbm'         => $row['konsumsi_bbm'],
              'jarak_tempuh'         => $row['jarak_tempuh'],
              'harga'         => $row['harga']
            );                  
          }

          $query_k = $koneksi->query('SELECT * FROM tb_kriteria');
          $id_kriteria = [];
          while ($row_k = $query_k->fetch_array(MYSQLI_ASSOC)) {
            $id_kriteria[] = $row_k['id_kriteria'];
          }

          foreach ($data_post as $key => $value) {

            if ($value['tahun_pembuatan'] == 2018) {
              $tahun_hasil = 1;
            } else if ($value['tahun_pembuatan'] == 2019) {
              $tahun_hasil = 2;
            } else if ($value['tahun_pembuatan'] == 2020) {
              $tahun_hasil = 3;
            } else if ($value['tahun_pembuatan'] == 2021) {
              $tahun_hasil = 4;
            } else if ($value['tahun_pembuatan'] == 2022) {
              $tahun_hasil = 5;
            } else {
              $tahun_hasil = 0;
            }

            if ($value['kondisi_mesin'] == "Sangat Bagus") {
              $kondisimesin_hasil = 5;
            } else if ($value['kondisi_mesin'] == "Bagus") {
              $kondisimesin_hasil = 4;
            } else if ($value['kondisi_mesin'] == "Cukup Bagus") {
              $kondisimesin_hasil = 3;
            } else if ($value['kondisi_mesin'] == "Cukup") {
              $kondisimesin_hasil = 2;
            } else if ($value['kondisi_mesin'] == "Kurang Bagus") {
              $kondisimesin_hasil = 1;
            } else {
              $kondisimesin_hasil = 0;
            }

            if ($value['kondisi_body'] == "Sangat Bagus") {
              $kondisibody_hasil = 5;
            } else if ($value['kondisi_body'] == "Bagus") {
              $kondisibody_hasil = 4;
            } else if ($value['kondisi_body'] == "Cukup Bagus") {
              $kondisibody_hasil = 3;
            } else if ($value['kondisi_body'] == "Cukup") {
              $kondisibody_hasil = 2;
            } else if ($value['kondisi_body'] == "Kurang Bagus") {
              $kondisibody_hasil = 1;
            } else {
              $kondisibody_hasil = 0;
            }

            if ($value['konsumsi_bbm'] >= 58) {
              $konsumsi_hasil = 3;
            } else if ($value['konsumsi_bbm'] >= 45 && $value['konsumsi_bbm'] <= 58) {
              $konsumsi_hasil = 2;
            } else if ($value['konsumsi_bbm'] <= 45) {
              $konsumsi_hasil = 1;
            } else {
              $konsumsi_hasil = 0;
            }

            if ($value['jarak_tempuh'] <= 5000) {
              $jarak_hasil = 1;
            } else if ($value['jarak_tempuh'] >= 5001 && $value['jarak_tempuh'] <= 10000) {
              $jarak_hasil = 2;
            } else if ($value['jarak_tempuh'] >= 10001 && $value['jarak_tempuh'] <= 15000) {
              $jarak_hasil = 3;
            } else if ($value['jarak_tempuh'] >= 15001 && $value['jarak_tempuh'] <= 20000) {
              $jarak_hasil = 4;
            } else if ($value['jarak_tempuh'] >= 20001) {
              $jarak_hasil = 5;
            } else {
              $jarak_hasil = 0;
            }

            if ($value['harga'] < 17000000) {
              $harga_hasil = 1;
            } else if ($value['harga'] >= 17000001 && $value['harga'] <= 21000000) {
              $harga_hasil = 2;
            } else if ($value['harga'] >= 21000001 && $value['harga'] <= 25000000) {
              $harga_hasil = 3;
            } else if ($value['harga'] >= 25000001 && $value['harga'] <= 29000000) {
              $harga_hasil = 4;
            } else if ($value['harga'] >= 29000001) {
              $harga_hasil = 5;
            } else {
              $harga_hasil = 0;
            }

            $nilai = array(
              $harga_hasil,
              $tahun_hasil,
              $kondisimesin_hasil,
              $kondisibody_hasil,
              $konsumsi_hasil,
              $jarak_hasil
            );

            $sql = "INSERT INTO tb_alt_motor (id_alt_motor, id_alternatif, nama_alternatif, tahun_pembuatan, kondisi_mesin, kondisi_body, konsumsi_bbm, jarak_tempuh, harga) VALUES ('$value[id_alt_motor]', '$value[id_alternatif]', '$value[nama_alternatif]', '$value[tahun_pembuatan]', '$value[kondisi_mesin]', '$value[kondisi_body]', '$value[konsumsi_bbm]', '$value[jarak_tempuh]', '$value[harga]')";
            $koneksi->query($sql);

            for ($i = 0; $i < count($id_kriteria); $i++) {
              $sql = "INSERT INTO tb_nilai (id_alt_motor, id_kriteria, nilai) VALUES ('$value[id_alt_motor]','$id_kriteria[$i]','$nilai[$i]')";
              $query = $koneksi->query($sql);
            }

          }

          if ($query) {
            echo "<script>alert('Berhasil!');</script>";
            echo "<script>window.location.href = \"proses_perhitungan.php\"</script>";
          } else {
            echo "<script>alert('Gagal, Ulangi Pilihan!');</script>";
          } 

        }


      ?>