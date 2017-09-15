<?php
include("../connection/config.php"); 
$qu="select * from mv_screen where theatre_id='".$_REQUEST['id']."'";
$qs=mysqli_query($con,$qu);

 ?>