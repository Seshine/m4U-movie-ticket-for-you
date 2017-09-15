<?php
include("../connection/config.php"); 

	
$qu="select * from mv_screen where theatre_id='".$_REQUEST['id']."'";
$qs=mysqli_query($con,$qu);
$qu="select name from mv_theatre where id='".$_REQUEST['id']."'";
$qn=mysqli_query($con,$qu);
$qm=mysqli_fetch_array($qn);

 ?>