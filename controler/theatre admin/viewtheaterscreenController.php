<?php
include("../connection/config.php"); 
$qe="select id from mv_login where username='".$_SESSION['userid']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);

$screenq="select mv_screen.id as id, mv_screencategory.screenname as screenname,mv_screencategory.seats as seats,mv_screencategory.sctype as sctype ,mv_screencategory.amount from mv_screen 
join mv_screencategory on mv_screencategory.id=mv_screen.screentypeid
where mv_screen.login_id='".$qe['id']."' and mv_screen.theatre_id='".$_REQUEST['id']."'";
$screens=mysqli_query($con,$screenq);

 ?>