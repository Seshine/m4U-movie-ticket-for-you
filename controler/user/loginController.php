<?php
include("../connection/config.php");

session_start();

if(isset($_POST['slogin']))
{
  $userId=$_POST['uid'];
  $password=$_POST['upassword'];

$stmt=$con->prepare("select usertype from mv_login where username=? and password=? and status=1");
if($stmt)
  {
  $stmt->bind_param("ss",$userId,$password);
  $stmt->execute();
  $stmt->bind_result($usertype);
  $stmt->fetch();
  }
if($usertype)
  {
    $_SESSION['useridu']=$userId;
	$_SESSION['usertypeu']=$usertype;
	
	switch($usertype)
	  {
	  
		case 3:  if(isset($_REQUEST['id']))
	   { 
	   ?>  <script> window.location="../users/index.php?id=<?php echo $_REQUEST['id'];?>&nseat=<?php echo $_GET['nseat'];?>"; </script>
	   
	   <?php
	    
         
	   break;
		}
		else
		
		{
		 header("Location:../users/index.php");break;
		}
		
	}
	}
	else
	 {
	 $_SESSION['error']="Invalid User Id or Password";
	header("Location:../users/pages-login.php");
	
}
 
$stmt->close();
}
?>
