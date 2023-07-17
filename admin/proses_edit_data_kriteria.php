<?php
include '../koneksi.php';
session_start();

$id_user = $_SESSION['id_user'];
$id_kriteria = $_GET['id_kriteria'];
$kode = $_GET['kode'];
$kriteria = $_GET['kriteria'];
$tipe_kriteria = $_GET['tipe_kriteria'];
$bobot = $_GET['bobot'];

if (true){
  mysqli_query($koneksi, "update tb_kriteria set kode='$kode', kriteria='$kriteria', tipe_kriteria='$tipe_kriteria', bobot='$bobot' where id_kriteria='$id_kriteria'" );
  echo "<script>alert('Data Bobot Berhasil Diubah'); window.location.href = 'datakriteria.php';</script>";
}
else {
  echo "<script>alert('Gagal!');document.location='edit_data_kriteria.php'</script>";
}

?>