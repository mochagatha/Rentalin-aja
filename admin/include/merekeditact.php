<?php
include('includes/config.php');
$id		= $_POST['id'];
$brand	= $_POST['brand'];
$sql 	= "UPDATE merek SET nama_merek='$brand' WHERE id_merek='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'index.php?include=merek'; 
		</script>";

}else {
	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'index.php?include=merek-edit&id=$id'; 
		</script>";

}
?>