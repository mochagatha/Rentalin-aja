<?php
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['ulogin'])==0){ 
header('location:index.php');
}else{
if(isset($_POST['updateprofile'])){
	$name=$_POST['fullname'];
	$mobileno=$_POST['mobilenumber'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$sql="UPDATE users SET nama_user='$name',telp='$mobileno',alamat='$address' WHERE email='$email'";
	$query = mysqli_query($koneksidb,$sql);
	if($query){
	$msg="Profile berhasi diupdate.";
	}else{
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);	}
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
<title>RentalinAja | My Profile</title>

<!--Bootstrap/css -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--Bootstrap/css -->

<!-- Symbol/icons -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<!-- Symbol/icons -->

<!-- warna -->
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="blue" media="all" data-default-color="true" />
<!-- warna -->

<!-- logo Atas -->
<link rel="shortcut icon" href="assets/images/logo.png">
<!-- logo Atas -->
<script type="text/javascript">
function checkLetter(theform)
{
		pola_nama=/^[a-zA-Z .]*$/;
		if (!pola_nama.test(theform.fullname.value)){
		alert ('Hanya huruf yang diperbolehkan untuk Nama!');
		theform.fullname.focus();
		return false;
		}
		return (true);
}
 
</script>

</head>
<body>


        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!--==Page Header== line 1267-->
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
<!-- ==Page Header== line 1267-->


<?php 
$useremail=$_SESSION['ulogin'];
$sql = "SELECT * from users where email='$useremail'";
$query = mysqli_query($koneksidb,$sql);
while($result=mysqli_fetch_array($query)){
?>
<section class="user_profile inner_pages">
  <div class="container">
    
  <!-- ==user_profile_info== line 1899 -->
	<div class="user_profile_info">
		<div class="col-md-12 col-sm-10">
          <?php  
         if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
          <form  method="post" name="theform" onSubmit="return checkLetter(this);">
           <div class="form-group">
              <label class="control-label">Tanggal Daftar -</label>
             <?php echo htmlentities($result['RegDate']);?>
            </div>
             <?php if($result['UpdationDate']!=""){?>
            <div class="form-group">
              <label class="control-label">Terakhir diupdate pada  -</label>
             <?php echo htmlentities($result['UpdationDate']);?>
            </div>
            <?php } ?>
            <div class="form-group">
              <label class="control-label">Nama</label>
              <input class="form-control white_bg" name="fullname" value="<?php echo htmlentities($result['nama_user']);?>" id="fullname" type="text"  required>
            </div>
            <div class="form-group">
              <label class="control-label">Alamat Email</label>
              <input class="form-control white_bg" value="<?php echo htmlentities($result['email']);?>" name="email" id="email" type="email" required readonly>
            </div>
            <div class="form-group">
              <label class="control-label">Telepon</label>
              <input class="form-control white_bg" name="mobilenumber" value="<?php echo htmlentities($result['telp']);?>" id="phone-number" type="number" min="0" required>
            </div>
            <div class="form-group">
              <label class="control-label">Alamat</label>
              <textarea class="form-control white_bg" name="address" rows="4" ><?php echo htmlentities($result['alamat']);?></textarea>
            </div>
			<div class="form-group">
				<label class="control-label">KTP</label><br/>
              	<img src="image/id/<?php echo htmlentities($result['ktp']);?>" width="300" height="200" style="border:solid 1px #000"><br/>
					<a href="index.php?include=ganti-ktp&">Ganti Gambar KTP</a>
			</div>
			<div class="form-group">
				<label class="control-label">Foto</label><br/>
              	<img src="image/id/<?php echo htmlentities($result['kk']);?>" width="300" height="400" style="border:solid 1px #000"><br/>
					<a href="index.php?include=ganti-kk&">Ganti Foto</a>
			</div>
<?php } ?>
            <div class="form-group">
              <button type="submit" name="updateprofile" class="btn">Simpan Perubahan <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
		 </div>
	</div>
</div>
</section>
  <!-- ==user_profile_info== line 1899 -->

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
<!-- warna di nav bar -->
<script src="assets/js/jquery.min.js"></script>
<!-- warna di nav bar -->

<!-- drop down -->
<script src="assets/js/bootstrap.min.js"></script> 
<!-- drop down -->

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