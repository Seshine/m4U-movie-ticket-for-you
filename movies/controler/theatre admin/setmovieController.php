<?php
include("../connection/config.php");
$qu="select * from mv_movies where id='".$_REQUEST['id']."'";
$data=mysqli_query($con,$qu);
$data=mysqli_fetch_array($data);
$qu="select * from mv_theatre where id='".$data['theatre_id']."'";
$data2=mysqli_query($con,$qu);
$data2=mysqli_fetch_array($data2);
$qu="select * from mv_show where theatre_id='".$data['theatre_id']."'";
$data3=mysqli_query($con,$qu);
$qu="select * from mv_screen where theatre_id='".$data['theatre_id']."'";
$data4=mysqli_query($con,$qu);

?>