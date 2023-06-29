<!-- index.php?include= -->
<?php
session_start();
include('includes/config.php');
// include('includes/leftbar.php');
if(isset($_GET["include"])){
	$include = $_GET["include"];
	if($include=="home"){
	  include("include/home.php");
	}
	else if($include=="car-listing"){
	  include("include/car-listing.php");
	}
	else if($include=="contact-us"){
	  include("include/contact-us.php");
	}
	else if($include=="profile"){
	  include("include/profile.php");
	}
	else if($include=="update-password"){
	  include("include/update-password.php");
	}
	else if($include=="riwayat-sewa"){
	  include("include/riwayatsewa.php");
	}
	else if($include=="logout"){
	  include("include/logout.php");
	}
	else if($include=="booking-detail"){
	  include("include/booking_detail.php");
	}
	else if($include=="booking-edit"){
	  include("include/booking_edit.php");
	}
	else if($include=="booking-ready"){
	  include("include/booking_ready.php");
	}
	else if($include=="booking"){
	  include("include/booking.php");
	}
	else if($include=="check-availability"){
	  include("include/check_availability.php");
	}
	else if($include=="detail-cetak"){
	  include("include/detail_cetak.php");
	}
	else if($include=="ganti-kk"){
	  include("include/gantikk.php");
	}
	else if($include=="ganti-ktp"){
	  include("include/gantiktp.php");
	}
	else if($include=="regist"){
	  include("include/regist.php");
	}
	else if($include=="regist-act"){
	  include("include/registact.php");
	}
	else if($include=="search-carresult"){
	  include("include/search-carresult.php");
	}
	else if($include=="update_sewa"){
		include("include/update_sewa.php");
	}
	else if($include=="update-password-act"){
		include("include/update-passwordact.php");
	}
	else if($include=="vehical-details"){
		include("include/vehical-details.php");
	}
}

?>
<!doctype html>
<html>
<head>
</head>
<?php
//cek ada get include
if(isset($_GET["include"])){
  	$include = $_GET["include"];
  	//cek apakah ada session id admin
  	if(isset($_SESSION['id'])){
      ?>
<body>
<?php include("includes/header.php") ?>
<?php include("includes/footer.php") ?>
<?php include("includes/format_rupiah.php") ?>
</body>
<?php
  	}
}else{
  if(isset($_SESSION['id'])){
    ?>
<body>
<?php
            //pemanggilan profil
            include("include/dashboard.php");
          ?>
</body>
<?php  
  }else{
  //pemanggilan halaman form login
    include("include/home.php");
  } 
}
?>
</html>