<?php 

if(isset($_POST['register']))
{

$new_password=$_POST['inputPassword'];
$re_password=$_POST['cinputPassword'];

if($new_password!=$re_password){
?>
<script>alert("check your passwords");</script>

<?php
}
else
{
$ep=mysqli_num_rows(mysqli_query($con,"select * from mv_login where username='".$_POST['inputname']."'"));
if($ep>=1)
{?>

<script>alert("user name already exsit");</script>
<?php
}
else{



$qu="insert mv_login (username,password,usertype,status) values('".$_POST['inputname']."','".$_POST['inputPassword']."','3','1')";
$da=mysqli_query($con,$qu);
$login=$con->insert_id;
$qu="insert mv_userregistrations (login_id,username,password,address,email,phone,gender) values('".$login."','".$_POST['inputname']."','$re_password','".$_POST['inputaddress']."','".$_POST['inputEmail']."','".$_POST['inputphone']."','".$_POST['s']."')";
$d=mysqli_query($con,$qu);
if($da)
{
if(isset($_REQUEST['id']))
	   { 
	   ?> <script> window.location="../movies/users/index.php?id=<?php echo $_REQUEST['id'];?>&nac=<?php echo $_GET['nac'];?>&nseat=<?php echo $_GET['nseat'];?>"; </script>
	   
	   <?php
	    
         
	   break;
		}
		else
		
		{  ?> 
	<script>	window.location="../movies/users/pages-login.php"; </script>
         <?php
}		}
}
}
}
?>