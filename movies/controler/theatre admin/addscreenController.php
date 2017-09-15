<?php
include("../connection/config.php");
 $qe="select id from mv_login where username='".$_SESSION['userid']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);



 
$qu="select * from mv_screen where login_id='".$qe['id']."'";
$qc=mysqli_query($con,$qu);

if(isset($_POST['addscreen']))
{

$q="insert into mv_screen (login_id,theatre_id,scname,seatcapcity) values( '".$qe['id']."','".$_REQUEST['id']."','".$_POST['mvscreen']."','".$_POST['mvseat']."')";
$d=mysqli_query($con,$q);
if($d)
{
?>
<script>window.location="../theatre admin/view theatre.php";</script>

<?php

}

}
 ?>