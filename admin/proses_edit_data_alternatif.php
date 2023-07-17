<?php
include '../koneksi.php';
session_start();

$id_user = $_SESSION['id_user'];
$id_alternatif = $_POST['id_alternatif'];
$nama_alternatif = $_POST['nama_alternatif'];
$tahun_pembuatan = $_POST['tahun_pembuatan'];
$kondisi_mesin = $_POST['kondisi_mesin'];
$kondisi_body = $_POST['kondisi_body'];
$konsumsi_bbm = $_POST['konsumsi_bbm'];
$jarak_tempuh = $_POST['jarak_tempuh'];
$harga = $_POST['harga'];
$filename = $_FILES['file']['name'];

$rand = rand();
$allowed = array('jpeg','png','jpg','webp');
$filename = $_FILES['file']['name'];

if($filename==""){
    mysqli_query($koneksi, "update tb_alternatif set nama_alternatif='$nama_alternatif', tahun_pembuatan='$tahun_pembuatan', kondisi_mesin='$kondisi_mesin', kondisi_body='$kondisi_body', konsumsi_bbm='$konsumsi_bbm', jarak_tempuh='$jarak_tempuh', harga='$harga' where id_alternatif='$id_alternatif'" );
    echo "<script>alert('Data Berhasil Diubah'); window.location.href = 'data_alternatif.php';</script>";
}

else{
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(in_array($ext, $allowed) ){
        $datalama = mysqli_query($koneksi,"select * from tb_alternatif where id_alternatif='$id_alternatif'");
            $dl = mysqli_fetch_assoc($datalama);
            $nama_data_lama = $dl['foto_alternatif'];
            unlink("../img_data_alternatif/".$nama_data_lama);

             move_uploaded_file($_FILES['file']['tmp_name'],'../img_data_alternatif/'.$rand. '_'.$filename);
             $file = $rand.'_'.$filename;
             mysqli_query($koneksi, "update tb_alternatif set nama_alternatif='$nama_alternatif', tahun_pembuatan='$tahun_pembuatan', kondisi_mesin='$kondisi_mesin', kondisi_body='$kondisi_body', konsumsi_bbm='$konsumsi_bbm', jarak_tempuh='$jarak_tempuh', harga='$harga', foto_alternatif='$file' where id_alternatif='$id_alternatif'")or die(mysqli_error($koneksi));
             echo "<script>alert('Data Berhasil Diubah'); window.location.href = 'data_alternatif.php';</script>";

    }
    else{
        echo "<script>alert('Data Berhasil Diubah'); window.location.href = 'edit_data_alternatif.php';</script>";
    }
}
?>