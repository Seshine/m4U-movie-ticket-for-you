
<?php

include("../connection/config.php"); 
$qu="select * from mv_userregistrations";
$qu=mysqli_query($con,$qu);

if(isset($_POST['sub']))
{

$eu="delete from mv_login where id='".$_REQUEST['del']."'";
$eu=mysqli_query($con,$eu);
$eup="delete from mv_userregistrations where login_id='".$_REQUEST['del']."'";
$eup=mysqli_query($con,$eu);


if($eu)
{
	?>
<script >
window.location="../../main admin/viewu.php";

 alert("user removed"); </script>
	<?php
}
}
?>