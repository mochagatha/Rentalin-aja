<?php
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
{
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql1="INSERT INTO contactus (nama_visit,email_visit,telp_visit,pesan) VALUES('$name','$email','$contactno','$message')";
$lastInsertId = mysqli_query($koneksidb, $sql1);
if($lastInsertId){
	$msg="Pesan Terkirim. Kami akan menghubungi anda secepatnya.";
}else{
	$error="Terjadi Kesalahan! Silahkan coba lagi.";
}
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
<title>RentalinAja</title>

<!--Bootstrap/css -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--Bootstrap/css -->

<!-- Symbol/icons -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<!-- Symbol/icons -->

<!-- warna -->
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
<!-- warna -->

<!-- logo Atas -->
<link rel="shortcut icon" href="assets/images/logo.png">
<!-- logo Atas -->
<style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>
</head>
<body>


        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Hubungi Kami</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Hubungi Kami</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Contact-us-->
<section class="contact_us section-padding">
  <div class="container">
    <div  class="row">
      <div class="col-md-6">
        <h3>Ada Pertanyaan? Silahkan Isi Form Berikut </h3>
          <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <div class="contact_form gray-bg">
          <form  method="post">
            <div class="form-group">
              <label class="control-label">Full Name <span>*</span></label>
              <input type="text" name="fullname" class="form-control white_bg" id="fullname" required>
            </div>
            <div class="form-group">
              <label class="control-label">Email Address <span>*</span></label>
              <input type="email" name="email" class="form-control white_bg" id="emailaddress" required>
            </div>
            <div class="form-group">
              <label class="control-label">Phone Number <span>*</span></label>
              <input type="text" name="contactno" class="form-control white_bg" id="phonenumber" required>
            </div>
            <div class="form-group">
              <label class="control-label">Message <span>*</span></label>
              <textarea class="form-control white_bg" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Send Message <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Info Kontak</h3>
        <div class="contact_detail">
<?php 
$pagetype=$_GET['type'];
$sql1 = "SELECT * from contactusinfo";
$query1 = mysqli_query($koneksidb,$sql1);
if(mysqli_num_rows($query1)>0)
{
while($result = mysqli_fetch_array($query1))
{
?>
          <ul>
            <li>
              <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="contact_info_m"><?php   echo htmlentities($result['alamat_kami']); ?></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href=""><?php   echo htmlentities($result['email_kami']); ?></a></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href=""><?php   echo htmlentities($result['telp_kami']); ?></a></div>
            </li>
          </ul>
        <?php }} ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Contact-us--> 

<!-- kelompok -->

<!-- <div class="team">
        <h1>Our<span>Team</span></h1>

        <div class="team_box">
            <div class="profile">
                <img src="assets/images/agatha.jpeg">

                <div class="info">
                    <h2 class="name">M Agatha</h2>
                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="assets/images/agatha.jpeg">

                <div class="info">
                    <h2 class="name">Chef</h2>
                    <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="assets/images/agatha.jpeg">

                <div class="info">
                    <h2 class="name">Chef</h2>
                    <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="assets/images/agatha.jpeg">

                <div class="info">
                    <h2 class="name">Chef</h2>
                    <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>
            <div class="profile">
                <img src="assets/images/farhan.jpg">

                <div class="info">
                    <h2 class="name">Farhan</h2>
                    <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

        </div>

    </div> -->
<!-- kelompok -->


<!--Footer -->
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
