<?php
include("../connection/config.php");

//select one state from state table


if(isset($_POST['pass']))
{

$old_password=$_POST['old_password'];
$new_password=$_POST['new_password'];
$re_password=$_POST['re_password'];
//check uerid
$flag=mysqli_fetch_array(mysqli_query($con,"select * from mv_login where username='".$_SESSION['userid']."'"));
if($flag['password']!=$old_password){
	?>
<script>alert("old password is worng");</script>

<?php
}
else if($new_password!=$re_password){
?>
<script>alert("check your passwords");</script>

<?php
}
else{
	$q1="Update mv_login set password='".$new_password."' where id='".$flag['id']."'";
    $d1=mysqli_query($con,$q1);
    if($d1)
	{?>
	<script>alert("succefull");
    </script>

	<?php
	}
	else
	{
	echo '<script>alert("failed");</script>';
	}
}




}
?>
