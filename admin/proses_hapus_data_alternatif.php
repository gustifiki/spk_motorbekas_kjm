<?php 
include '../koneksi.php';
$id_alternatif = $_GET['id'];

$query = mysqli_query($koneksi, "select * from tb_alternatif where id_alternatif='$id_alternatif'");
mysqli_query($koneksi, "delete from tb_alternatif where id_alternatif='$id_alternatif'");
echo "<script>alert('Data Berhasil Dihapus'); window.location.href = 'data_alternatif.php';</script>";