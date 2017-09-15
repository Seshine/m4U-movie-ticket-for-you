<?php
include("../connection/config.php"); 
 $qe="select id from mv_login where username='".$_SESSION['userid']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);




$sc="select * from mv_showcategory where login_id='".$qe['id']."'";
$showcat=mysqli_query($con,$sc);


if(isset($_POST['addshow']))
{
$catname=$_POST['catname'];
$sttime=$_POST['sttime'];
$endtime=$_POST['endtime'];
$qu="insert into mv_showcategory (login_id,showname,timefrom,timeto,status) values('".$qe['id']."','".$catname."','".$sttime."','".$endtime."',0)";
$qu=mysqli_query($con,$qu);
if($qu)
{
?>
<script>window.location="../theatre admin/addshows.php?id=1";</script>
<?php
}
else
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
 
 }
 if(isset($_POST['showcatdelete'])){
 	$catid=$_POST['deletecatid'];
 	$res=mysqli_query($con,"delete from mv_showcategory where id='".$catid."'");
 	if($res){
 		?>
		<script>window.location="../theatre admin/addshows.php?id=2";</script>
		<?php
 	}
 }

 ?>