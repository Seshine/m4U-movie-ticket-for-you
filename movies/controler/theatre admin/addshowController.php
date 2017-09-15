<?php
include("../connection/config.php"); 
 $qe="select id from mv_login where username='".$_SESSION['userid']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);
$qu="select * from mv_show where login_id='".$qe['id']."'";
$qs=mysqli_query($con,$qu);





if(isset($_POST['addshow']))
{

$q="insert into mv_show (theatre_id,showname,am_pm,startshow,endshow,showdate,login_id) values('".$_REQUEST['id']."','".$_POST['mvname']."',,'".$_POST['am_pm']."','".$_POST['mvstime']."','".$_POST['mvetime']."','".$_POST['mvdate']."','".$qe['id']."')";
$d=mysqli_query($con,$q);
if($d)
{
?>
<script>window.location="../theatre admin/view theatre.php";</script>

<?php

}

}
 ?>