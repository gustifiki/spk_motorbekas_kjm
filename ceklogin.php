<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password =md5($_POST['password']);
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['nama_user'] = $data['nama_user'];
		$_SESSION['foto_user'] = $data['foto_user'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['status'] = "admin_login";
		// alihkan ke halaman dashboard admin
		echo "<script>alert('Selamat Datang!');document.location='admin/beranda.php'</script>";

	// cek jika user login sebagai visitor
	}else if($data['level']=="visitor"){
		// buat session login dan username
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['nama_user'] = $data['nama_user'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['foto_user'] = $data['foto_user'];
		$_SESSION['status'] = "visitor_login";
		// alihkan ke halaman dashboard visitor
		echo "<script>alert('Selamat Datang!');document.location='visitor/beranda.php'</script>";
	}else{

		// alihkan ke halaman login kembali
		echo "<script>alert('Gagal Login, Coba Lagi!');document.location='index.php'</script>";
	}	
}else{
	echo "<script>alert('Gagal Login, Coba Lagi!');document.location='index.php'</script>";
}

?>