<?php 
  include("../connection/config.php");
 $qu="select * from mv_userregistrations where username='".$_SESSION['useridu']."' ";
  $qu=mysqli_query($con,$qu);
  $qu=mysqli_fetch_array($qu);
   
 $qe="select id from mv_login where username='".$_SESSION['useridu']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);

 if(isset($_POST['tsave']))
  {
  $qu="update mv_userregistrations set login_id='".$qe['id']."', email='".$_POST['email']."',address='".$_POST['locations']."',phone='".$_POST['phone']."' 
  where username='".$_SESSION['useridu']."' ";
  $qu=mysqli_query($con,$qu);
  if($qu)
  {
  ?>
  <script>window.location="../users/profile.php";</script>
  <?php
  }
  }
  
  ?>