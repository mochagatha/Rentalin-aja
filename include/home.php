<?php 
include('includes/config.php');
include('includes/format_rupiah.php');
error_reporting(0);
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
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="blue" media="all" data-default-color="true" />
<!-- warna -->

<!-- logo Atas -->
<link rel="shortcut icon" href="assets/images/logo.png">
<!-- logo Atas -->
</head>
<body>

        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- ==Banner home== line 878 -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          
          <!-- css line 898 -->
          <div class="banner_content">
            <h1>Cari Mobil untuk Perjalanan Asik anda.</h1>
            <p>Kami Punya beberapa pilihan Mobil untuk anda. </p>
            <a href="index.php?include=car-listing" class="btn">Selengkapnya <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ==Banner home== line 878 --> 


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="row"> 
      
      <!-- Nav tabs -->
      <!-- ==Recent line== 930 -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Mobil Untuk Anda</a></li>
        </ul>
      </div>
      <!-- ==Recent line== 930 -->

      <!-- Recently Listed New Cars -->
      <!-- ==tab-content== 1595 -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">
<?php 
$sql = "SELECT mobil.*, merek.* FROM mobil, merek WHERE merek.id_merek = mobil.id_merek";
$query = mysqli_query($koneksidb,$sql);
if(mysqli_num_rows($query)>0)
{
while($results = mysqli_fetch_array($query))
{

?>  
<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="index.php?include=vehical-details&vhid=<?php echo htmlentities($results['id_mobil']);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($results['image1']);?>" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($results['bb']);?></li>
<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($results['tahun']);?> Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($results['seating']);?> Seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="index.php?include=vehical-details&vhid=<?php echo htmlentities($results['id_mobil']);?>"><?php echo htmlentities($results['nama_merek']);?> , <?php echo htmlentities($results['nama_mobil']);?></a></h6>
<span class="price"><?php echo htmlentities(format_rupiah($results['harga']));?> /Hari</span> 
</div>
<div class="inventory_info_m">
<p><?php echo substr($results['deskripsi'],0,70);?></p>
</div>
</div>
</div>
<?php }}?>
       
      </div>
    </div>
  </div>
</section>
<!-- ==tab-content== 1595 -->
<!-- /Resent Cat --> 


<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--==Back to top== line 1246-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--==Back to top== line 1246--> 

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