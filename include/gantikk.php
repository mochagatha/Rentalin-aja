<?php
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['ulogin'])==0){ 
header('location:index.php');
}else{
if(isset($_POST['update'])){
	$image1=$_FILES["img1"]["name"];
	$newimg1 = date('dmYHis').$image1;
	$email=$_POST['mail'];
	move_uploaded_file($_FILES["img1"]["tmp_name"],"image/id/".$newimg1);
	$sql="update users set kk='$newimg1' where email='$email'";
	$query	= mysqli_query($koneksidb, $sql);
	echo "<script type='text/javascript'>
			alert('Berhasil ganti gambar.');
			document.location = 'index.php?include=profile'; 
		</script>";
}
?>
  <!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Rentalin Aja | My Profile</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!-- Symbol/icons -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">


</head>
<body>

 
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 
<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Profil Anda</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Profile</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 


<?php 
$useremail=$_SESSION['ulogin'];
$sql = "SELECT * from users where email='$useremail'";
$query = mysqli_query($koneksidb,$sql);
while($result=mysqli_fetch_array($query)){
?>
<section class="user_profile inner_pages">
  <div class="container">
  <div class="content-wrapper">
			<div class="container-fluid">
			<a href="index.php?include=profile"><span class="glyphicon glyphicon-arrow-left"></span>Kembali</a>
				<div class="row">
					<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Details Foto</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal" enctype="multipart/form-data">

											<div class="form-group">
											<label class="col-sm-4 control-label">Foto Sekarang</label>
												<div class="col-sm-8">
													<input type="hidden" name="mail" class="form-control" value="<?php echo $useremail;?>" required>
													<img src="image/id/<?php echo htmlentities($result['kk']);?>" width="300" height="400" style="border:solid 1px #000">
												</div>
											</div>

											<div class="form-group">
											<input type="hidden" name="id" value="<?php echo $id; ?>"required>
											<label class="col-sm-4 control-label">Upload Foto Baru<span style="color:red">*</span></label>
												<div class="col-sm-8">
													<input type="file" name="img1" accept="image/*" required>
												</div>
											</div>
											<div class="hr-dashed"></div>
											
											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
													<button class="btn btn-primary" name="update" type="submit">Update</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
							
						</div>
									
			</div>
		</div>
<?php } ?>
</form>
</div>
</section>
<!--/Profile-setting--> 

<<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
<?php } ?>