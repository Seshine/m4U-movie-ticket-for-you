<?php
include("../connection/config.php"); 
 $qe="select id from mv_login where username='".$_SESSION['userid']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);




$sc="select * from mv_screencategory where login_id='".$qe['id']."'";
$showcat=mysqli_query($con,$sc);


if(isset($_POST['addscreen']))
{
$catname=$_POST['catname'];
$noseats=$_POST['noseats'];
$sctype=$_POST['sctype'];
$qu="insert into mv_screencategory (login_id,screenname,seats,sctype,status) values('".$qe['id']."','".$catname."','".$noseats."','".$sctype."',0)";
$qu=mysqli_query($con,$qu);
if($qu)
{
?>
<script>window.location="../theatre admin/addscreens.php?id=1";</script>
<?php
}
else
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
 
 }
 if(isset($_POST['screencatdelete'])){
 	$catid=$_POST['deletecatid'];
 	$res=mysqli_query($con,"delete from mv_screencategory where id='".$catid."'");
 	if($res){
 		?>
		<script>window.location="../theatre admin/addscreens.php?id=2";</script>
		<?php
 	}
 }

 ?>