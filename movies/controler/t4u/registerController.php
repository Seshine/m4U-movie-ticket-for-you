<?php 

if(isset($_POST['register']))
{
$qu="insert mv_userregistrations (username,password,address,email,phone,gender) values('".$_POST['inputname']."','".$_POST['inputPassword']."','".$_POST['inputaddress']."','".$_POST['inputEmail']."','".$_POST['inputphone']."','".$_POST['s']."')";
$d=mysqli_query($con,$qu);


$qu="insert mv_login (username,password,usertype) values('".$_POST['inputname']."','".$_POST['inputPassword']."','3')";
$da=mysqli_query($con,$qu);
}
?>