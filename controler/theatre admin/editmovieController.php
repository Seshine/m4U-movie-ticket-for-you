<?php
include("../connection/config.php"); 

$qu="select * from mv_movies where id='".$_REQUEST['id']."'";
$d=mysqli_query($con,$qu);
$p=mysqli_fetch_array($d);

if(isset($_POST['usam']))
{
$nam=$_POST['nam'];
$dam=$_POST['dam'];
$pam=$_POST['pam'];
$caam=$_POST['caam'];
$duam=$_POST['duam'];
$stam=$_POST['stam'];

$qu="update mv_movies set  movie_name='".$nam."', director='".$dam."' , producer='".$pam." ',casting='".$caam."',durations='".$duam."',story='".$stam."',status='0' where id='".$_REQUEST['id']."'";
$qu=mysqli_query($con,$qu);
if($qu)
{
?>
<script>window.location="../theatre admin/viewmovie.php";</script>
<?php
}
else
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
 
 }
 ?>