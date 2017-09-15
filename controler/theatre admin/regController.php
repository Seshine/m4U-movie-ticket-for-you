<?php
include("../connection/config.php");
session_start();


if(isset($_POST['slogin']))
{
$new_password=$_POST['upassword'];
$re_password=$_POST['cupassword'];

$ep=mysqli_num_rows(mysqli_query($con,"select * from mv_login where username='".$_POST['uid']."'"));
if($ep>=1)
{?>
<script> alert("username all ready exsit");</script>
<?php 
}
else if($new_password!=$re_password)
{
?>
<script>alert("check your passwords");</script>
<?php
}
else
{
$qu="insert into mv_login (username,password,usertype,status) values('".$_POST['uid']."','".$_POST['upassword']."','2','1')";
$da=mysqli_query($con,$qu);
$insertid=$con->insert_id;
$uid=$_POST['uid'];
$que="insert into mv_theatreregistrations(login_id,username) values('".$insertid."','".$uid."')";
$de=mysqli_query($con,$que);
if($de)
{
?>
<script>window.location="pages-login.php"; </script>
<?php
}
}
}









?>