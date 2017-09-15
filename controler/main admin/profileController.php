<?php 
 include("../connection/config.php");

 
 $qu="select * from mv_admindetails where username='".$_SESSION['useridu']."' ";
  $qu=mysqli_query($con,$qu);
  $qu=mysqli_fetch_array($qu);
   
 
   
  if(isset($_POST['tsave']))
  {
  $qu="update mv_admindetails set email='".$_POST['email']."' ,phone='".$_POST['phone']."',address='".$_POST['locations']."'
   where username='".$_SESSION['userida']."' ";
  $qu=mysqli_query($con,$qu);
  if($qu)
  {
  ?>
  <script>window.location="../main admin/profile.php";</script>
  <?php
  }
  }
  
  ?>