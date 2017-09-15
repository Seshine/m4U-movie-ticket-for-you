<?php
include("../connection/config.php");



 


if(isset($_POST['addscreen']))
{

$q="insert into mv_screen (theatre_id,scname,seatcapcity,amount) values( '".$_REQUEST['id']."','".$_POST['mvscreen']."','".$_POST['mvseat']."','".$_POST['mvamount']."')";
$d=mysqli_query($con,$q);
if($d)
{
?>
<script>window.location="../theatre admin/view theatre.php";</script>

<?php

}

}
 ?>