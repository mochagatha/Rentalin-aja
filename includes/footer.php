<?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT * FROM subscribers WHERE email_sub='$subscriberemail'";
$query = mysqli_query($koneksidb,$sql);
if(mysqli_num_rows($query)>0)
{
echo "<script>alert('Already Subscribed.');</script>";
}
else{
$sql1="INSERT INTO subscribers(email_sub) VALUES('$subscriberemail')";
$lastInsertId=mysqli_query($koneksidb, $sql1);
if($lastInsertId)
{
echo "<script>alert('Subscribed successfully.');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
}
?>

<!-- line 1158 -->
<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
      
        <div class="col-md-6">
          <h6>Tentang Kami</h6>
          <ul>
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
              <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="contact_info_m"><?php   echo htmlentities($result['email_kami']); ?></a></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="contact_info_m"><?php   echo htmlentities($result['telp_kami']); ?></a></div>
            </li>
          </ul>
        <?php }} ?>
        
              <li style="padding-top: 50px;"><a href="admin/">Admin Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- line 1204 -->
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          <div class="footer_widget">
        </div>
        <div class="col-md-6 col-md-pull-6">
          <h6 style="text-align: center; color: white; font-size: 12px ">Copyright 2022. All rights reserved.</h6>
        </div>
      </div>
    </div>
  </div>
</footer>