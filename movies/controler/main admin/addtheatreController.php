<?php
include("../connection/config.php"); 





$qu="select 
mv_theatre.id as id,
mv_theatre.login_id as login_id,
mv_theatre.name as name,
mv_theatre.address as address,
mv_theatre.pincode as pincode,
mv_theatre.phone_number as phone_number,
mv_theatre.status as status,
mv_theatre.created_at as created_at,
mv_city.city_name as city_name 
from mv_theatre 
join mv_city on mv_city.id=mv_theatre.city_id ";
$de=mysqli_query($con,$qu);
$qu="select * from mv_city";
$d=mysqli_query($con,$qu);
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
$created_at=$_POST['created_at'];

$qu="insert into mv_theatre (city_id,name,address,pincode,phone_number,created_at,status) values('".$qus['id']."','".$nat."','".$aat."','".$pat."','".$coat."','".$created_at."',1)";
$qu=mysqli_query($con,$qu);
if($qu)
{
?>
<script>window.location="../main admin/view theatre.php?idd=1";</script>
<?php
}
else
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
 
 }
 ?>