<?php  
	session_start();
	session_destroy();
	echo "<script>alert('Log Out Berhasil'); document.location='../index.php'</script>";
?>