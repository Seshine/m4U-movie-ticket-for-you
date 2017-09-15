<?php
include("../connection/config.php"); 

$qu="select * from mv_theatre where id='".$_REQUEST['id']."'";
$d=mysqli_query($con,$qu);
$p=mysqli_fetch_array($d);
if(isset($_POST['usat']))
{
$cat=$_POST['cat'];
$qu="select * from mv_city where city_name='".$cat."'";
$qu=mysqli_query($con,$qu);
$qus=mysqli_fetch_array($qu);
$nat=$_POST['nat'];
$aat=$_POST['aat'];
$pat=$_POST['pat'];
$coat=$_POST['coat'];
$created_at=$_POST['created_at'];
$qu="update mv_theatre set  name='".$nat."', address='".$aat."' , pincode='".$pat." ',phone_number='".$coat."',created_at='".$created_at."' ,status='0' where id='".$_REQUEST['id']."'";
$qu=mysqli_query($con,$qu);
if($qu)
{
?>
<script>window.location="../theatre admin/view theatre.php";</script>
<?php
}
else
 echo "ERROR: Could not able to execute $sql. "  .mysqli_error($con);
 
 }
 ?>