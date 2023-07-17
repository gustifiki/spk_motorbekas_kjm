<?php
include 'koneksi.php';
$nama_user = $_POST['nama_user'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$no_hp = $_POST['no_hp'];
$filename = $_FILES['file']['name'];
$level = 'visitor';

$rand = rand();
$allowed = array('jpeg','png','jpg','webp');
$filename = $_FILES['file']['name'];

$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext, $allowed) ){
 echo "<script>alert('Registrasi Gagal, Coba Lagi!'); window.location.href='register.php';</script>";
}
else {
 move_uploaded_file($_FILES['file']['tmp_name'], 'img_visitor/'.$rand. '_'.$filename);
 $file = $rand.'_'.$filename;
 mysqli_query($koneksi, "insert into user values ('','$nama_user','$username','$password','$no_hp','$file','$level')")or die(mysqli_error($koneksi));
 echo "<script>alert('Registrasi Sukses!'); window.location.href = 'index.php';</script>";
}
?>