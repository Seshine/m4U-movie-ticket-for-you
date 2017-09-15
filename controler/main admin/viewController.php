
<?php

include("../connection/config.php"); 
$qu="select * from mv_theatreregistrations";
$qu=mysqli_query($con,$qu);

if(isset($_POST['sub']))
{

if(!$_REQUEST['del']==0)
{
$eu="delete from mv_theatreregistrations where login_id='".$_REQUEST['del']."'";

$ep=mysqli_query($con,$eu);
$eu="delete from mv_login where id='".$_REQUEST['del']."'";
$eu=mysqli_query($con,$eu);

if($eu)
{
	?>
	
<script > 

window.location="../main admin/view.php";
alert("Entity removed"); </script>
	<?php
}

}
else
{?>
<script>
alert("can't remove because account creations not complect");
</script>

<?php }
}
?>