<?php
include("../connection/config.php"); 



if(isset($_POST['addshow']))
{

$q="insert into mv_show (theatre_id,showname,am_pm,startshow,endshow,showdate) values('".$_REQUEST['id']."','".$_POST['mvname']."','".$_POST['am_pm']."','".$_POST['mvstime']."','".$_POST['mvetime']."','".$_POST['mvdate']."')";
$d=mysqli_query($con,$q);
if($d)
{
?>
<script>window.location="../theatre admin/view theatre.php";</script>

<?php

}

}
 ?>