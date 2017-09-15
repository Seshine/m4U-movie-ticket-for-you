<?php
include("../connection/config.php");
session_start();
if(isset($_POST['slogin']))
{
$qu="insert mv_login (username,password,usertype,status) values('".$_POST['uid']."','".$_POST['upassword']."','2','1')";
$da=mysqli_query($con,$qu);
$qu="insert mv_theatreregistrations(username) values('".$_POST['uid']."')";
$de=mysqli_query($con,$qu);
if($da)
{
?>
<script>window.location="pages-login.php"; </script>
<?php
}
}


?>