<?php
include '../koneksi.php';

$jum = $_POST['jum'];  

$id = $_POST['id'];
$bobot = $_POST['bobot'];

for ($i=0; $i<$jum; $i++)
{
  mysqli_query($koneksi,"update tb_kriteria set
    bobot = '$bobot[$i]'
    where id_kriteria='$id[$i]'") 
  or die(mysqli_error($koneksi));
}
echo "<script>alert('Berhasil');
document.location='carimotor.php'</script>";

?>