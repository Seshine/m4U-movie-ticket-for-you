<?php
include("../connection/config.php");
session_start();
if(isset($_POST['slogin']))
{
  $userId=$_POST['uid'];
  $password=$_POST['upassword'];

$stmt=$con->prepare("select status from mv_login where username=? and password=? and status=1");
if($stmt)
  {
  $stmt->bind_param("ss",$userId,$password);
  $stmt->execute();
  $stmt->bind_result($usertype);
  $stmt->fetch();
  }
if($usertype)
  {
    $_SESSION['userid']=$userId;
	$_SESSION['usertype']=$usertype;
	
	switch($usertype)
	  {
	    case 1: header("Location:../main admin/index.php");break;
		case 2: header("Location:../secretory/home.php");break;
		case 3: header("Location:../member/home.php");break;
	}
	}
	else
	 {
	 $_SESSION['error']="Invalid User Id or Password";
	 header("Location:../main admin/pages-login.php");
	 }
 
$stmt->close();
}
?>
