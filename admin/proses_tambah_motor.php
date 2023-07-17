    <?php
    include '../koneksi.php';
    
    $nama_alternatif = $_POST['nama_alternatif'];
    $tahun_pembuatan = $_POST['tahun_pembuatan'];
    $kondisi_mesin = $_POST['kondisi_mesin'];
    $kondisi_body = $_POST['kondisi_body'];
    $konsumsi_bbm = $_POST['konsumsi_bbm'];
    $jarak_tempuh = $_POST['jarak_tempuh'];
    $harga = $_POST['harga'];

    $rand = rand();
    $allowed = array('jpeg','png','jpg','webp');
    $filename = $_FILES['file']['name'];


    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext, $allowed) ){
        echo "<script>alert('Tambah Data Motor Gagal, Coba Lagi!'); window.location.href='tambah_data_alternatif.php';</script>";
   }
   else {
       move_uploaded_file($_FILES['file']['tmp_name'], '../img_data_alternatif/'.$rand. '_'.$filename);
       $file = $rand.'_'.$filename;
       mysqli_query($koneksi, "insert into tb_alternatif values ('','$nama_alternatif','$tahun_pembuatan','$kondisi_mesin','$kondisi_body','$konsumsi_bbm','$jarak_tempuh','$harga','$file')")or die(mysqli_error($koneksi));
       echo "<script>alert('Data Motor Berhasil di Tambah'); window.location.href = 'data_alternatif.php';</script>";
   }
   ?>
