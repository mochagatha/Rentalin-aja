<?php
include('includes/config.php');
$brand	= $_POST['brand'];
$sql 	= "INSERT INTO merek (nama_merek) VALUES ('$brand')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data.'); 
			document.location = 'index.php?include=merek'; 
		</script>";

}else {
	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'index.php?include=tambah-merek'; 
		</script>";

}
?>