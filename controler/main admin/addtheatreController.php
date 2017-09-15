<?php
include("../connection/config.php"); 



 $qe="select id from mv_login where username='".$_SESSION['userida']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);

$qu="select * from mv_theatre ";
$de=mysqli_query($con,$qu);
$dep=mysqli_query($con,$qu);


if(isset($_POST['sat']))
{
$cat=$_POST['cat'];
$qu="select * from mv_city where city_name='".$cat."'";
$qu=mysqli_query($con,$qu);
$qus=mysqli_fetch_array($qu);
$nat=$_POST['nat'];
$aat=$_POST['aat'];
$pat=$_POST['pat'];
$coat=$_POST['coat'];

$qu="insert into mv_theatre (login_id,city_id,name,address,pincode,phone_number,status) values('".$qe['id']."','".$qus['id']."','".$nat."','".$aat."','".$pat."','".$coat."','1')";
$qu=mysqli_query($con,$qu);
if($qu)
{
?>
<script>window.location="../main admin/view theatre.php";</script>
<?php
}
else
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
 
 }
 ?>