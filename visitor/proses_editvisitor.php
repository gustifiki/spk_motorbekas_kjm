<?php  
include '../koneksi.php';
session_start();

$id_user = $_SESSION['id_user'];
$nama_user = $_POST['nama_user'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$password1 = $_POST['password'];
$no_hp = $_POST['no_hp'];
$level = 'admin';
$rand = rand();

$allowed = array('jpeg','png','jpg','webp');
$filename = $_FILES['file']['name'];

if ($password1=='' && $filename=="") {
	mysqli_query($koneksi, "update user set nama_user='$nama_user', username='$username', no_hp='$no_hp' where id_user='$id_user'" );
	echo "<script>alert('Profil Berhasil Diubah'); window.location.href = 'profil_visitor.php';</script>";
}

elseif($filename==""){
	mysqli_query($koneksi, "update user set nama_user='$nama_user', username='$username', password='$password', no_hp='$no_hp' where id_user='$id_user'" );
	echo "<script>alert('Profil Berhasil Diubah'); window.location.href = 'profil_visitor.php';</script>";
}

elseif($password1==''){
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(in_array($ext, $allowed) ){
		$datalama = mysqli_query($koneksi,"select * from user where id_user='$id_user'");
			$dl = mysqli_fetch_assoc($datalama);
			$nama_data_lama = $dl['foto_user'];
			unlink("../img_visitor/".$nama_data_lama);

			 move_uploaded_file($_FILES['file']['tmp_name'],'../img_visitor/'.$rand. '_'.$filename);
			 $file = $rand.'_'.$filename;
			 mysqli_query($koneksi, "update user set nama_user='$nama_user', username='$username', no_hp='$no_hp', foto_user='$file' where id_user='$id_user'")or die(mysqli_error($koneksi));
			 echo "<script>alert('Profil Berhasil Diubah'); window.location.href = 'profil_visitor.php';</script>";

	}
	else{
		echo "<script>alert('Profil Berhasil Diubah'); window.location.href = 'profil_visitor.php';</script>";
	}
}
else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(in_array($ext, $allowed) ){
		$datalama = mysqli_query($koneksi,"select * from user where id_user='$id_user'");
			$dl = mysqli_fetch_assoc($datalama);
			$nama_data_lama = $dl['foto_user'];
			unlink("../img_visitor/".$nama_data_lama);

			 move_uploaded_file($_FILES['file']['tmp_name'],'../img_visitor/'.$rand. '_'.$filename);
			 $file = $rand.'_'.$filename;
			 mysqli_query($koneksi, "update user set nama_user='$nama_user', username='$username', password='$password', no_hp='$no_hp', foto_user='$file' where id_user='$id_user'")or die(mysqli_error($koneksi));
			 echo "<script>alert('Profil Berhasil Diubah'); window.location.href = 'profil_visitor.php';</script>";

	}
	else{
		echo "<script>alert('Profil Berhasil Diubah'); window.location.href = 'profil_visitor.php';</script>";
	}
}
?>