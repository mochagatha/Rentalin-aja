<?php
error_reporting(0);
include('includes/config.php');
	$passw=$_POST['pass'];
	$pass=md5($passw);
	$new=$_POST['new'];
	$confirm=$_POST['confirm'];
	$mail=$_POST['mail'];
	
	$sql="SELECT * FROM users WHERE email='$mail' AND password='$pass'";
	$query = mysqli_query($koneksidb,$sql);
	if(mysqli_num_rows($query)==1){
		if($confirm==$new){
			$newpass=md5($new);
			$sqlup="UPDATE users SET password='$newpass' WHERE email='$mail'";
			$queryup= mysqli_query($koneksidb,$sqlup);
			if($queryup){
				echo 
				"<script type='text/javascript'>
				alert('Berhasil update password.'); 
				document.location = 'index.php?include=update-password'; 
				</script>";
			}else{
				echo 
				"<script type='text/javascript'>
				alert('Gagal update password!'); 
				document.location = 'index.php?include=update-password'; 
				</script>";
			}
		}else{
			echo 
				"<script type='text/javascript'>
				alert('Password baru dan konfirmasi password tidak sama!'); 
				document.location = 'index.php?include=update-password'; 
				</script>";
		}
	}else{
		
		echo 
				"<script type='text/javascript'>
				alert('Password salah!'); 
				document.location = 'index.php?include=update-password'; 
				</script>";
	}
?>