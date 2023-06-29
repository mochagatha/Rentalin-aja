<!-- index.php?include= -->
<?php
session_start();
include('includes/config.php');
// include('includes/leftbar.php');
if(isset($_GET["include"])){
	$include = $_GET["include"];
	if($include=="dashboard"){
	  include("include/dashboard.php");
	}
	else if($include=="sewa-bayar"){
	  include("include/sewa_bayar.php");
	}
	else if($include=="manage-conact-us-query"){
	  include("include/manage-conactusquery.php");
	}
	else if($include=="reg-users"){
	  include("include/reg-users.php");
	}
	else if($include=="sewa-konfirmasi"){
	  include("include/sewa_konfirmasi.php");
	}
	else if($include=="merek"){
	  include("include/merek.php");
	}
	else if($include=="mobil"){
	  include("include/mobil.php");
	}
	else if($include=="sewa"){
	  include("include/sewa.php");
	}
	else if($include=="sewa-kembali"){
	  include("include/sewa_kembali.php");
	}
	else if($include=="driver"){
	  include("include/driver.php");
	}
	else if($include=="manage-pages"){
	  include("include/manage-pages.php");
	}
	else if($include=="update-contactinfo"){
	  include("include/update-contactinfo.php");
	}
	else if($include=="laporan"){
	  include("include/laporan.php");
	}
	else if($include=="logout"){
	  include("include/logout.php");
	}
	else if($include=="change-password"){
	  include("include/change-password.php");
	}
	else if($include=="sewa-edit-bayar"){
	  include("include/sewaeditbayar.php");
	}
	else if($include=="sewa-edit"){
	  include("include/sewaedit.php");
	}
	else if($include=="sewa-edit-kembali"){
	  include("include/sewaeditkembali.php");
	}
	else if($include=="tambah-merek"){
		include("include/tambahmerek.php");
	}
	else if($include=="merek-edit"){
		include("include/merekedit.php");
	}
	else if($include=="merek-del"){
		include("include/merekdel.php");
	}
	else if($include=="merek-act"){
		include("include/merekact.php");
	}
	else if($include=="merek-edit-act"){
		include("include/merekeditact.php");
	}
	else if($include=="tambah-mobil"){
		include("include/tambahmobil.php");
	}
	else if($include=="tambah-mobil-act"){
	  include("include/tambahmobilact.php");
	}
	else if($include=="mobil-edit"){
		include("include/mobiledit.php");
	}
	else if($include=="mobil-edit-act"){
		include("include/mobileditact.php");
	}
	else if($include=="change-image1"){
		include("include/changeimage1.php");
	}
	else if($include=="change-image2"){
		include("include/changeimage2.php");
	}
	else if($include=="change-image3"){
		include("include/changeimage3.php");
	}
	else if($include=="change-image4"){
		include("include/changeimage4.php");
	}
	else if($include=="change-image5"){
		include("include/changeimage5.php");
	}
	else if($include=="mobil-del"){
		include("include/mobildel.php");
	}
	else if($include=="user-del"){
		include("include/userdel.php");
	}
	else if($include=="laporan-cetak"){
		include("include/laporan_cetak.php");
	}
	else if($include=="user-view"){
		include("include/userview.php");
	}
	else if($include=="sewa-view"){
		include("include/sewaview.php");
	}
	else if($include=="user-edit"){
		include("include/useredit.php");
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
<?php include("includes/leftbar.php") ?>
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
    include("include/login.php");
  } 
}
?>
</html>