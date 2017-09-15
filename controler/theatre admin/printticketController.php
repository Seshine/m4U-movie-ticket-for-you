<?php
include("../connection/config.php"); 

 $qe="select id from mv_login where username='".$_SESSION['userid']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);
//take bookin tabel

$u=mysqli_query($con,"select * from mv_booking where login_id='".$_REQUEST[['id']."' ");
$u=mysqli_fetch_array($u);


?>


