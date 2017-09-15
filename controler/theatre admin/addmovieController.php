<?php
include("../connection/config.php"); 
 $qe="select id from mv_login where username='".$_SESSION['userid']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);

//..
    $movies=mysqli_query($con,"select 
    	mm.movie_name as movie,
    	mm.director as director,
    	mm.producer as producer,
    	mm.casting as casting,
    	mm.durations as durations,
    	mm.story as story,
    	mm.status as status,
    	mt.name as theater,
    	mt.id as theaterid,
    	mm.id as id,
    	mm.created_at as created_at 
    	from mv_movies mm 
    	join mv_theatre mt on mt.id=mm.theatre_id 
    	where mm.login_id='".$qe['id']."'");



$qu="select * from mv_theatre where status='1'  and login_id='".$qe['id']."'";
$qu=mysqli_query($con,$qu);
if(isset($_POST['sam']))
{
$set=$_POST['set'];
$qu="select id from mv_theatre where name='".$set."'";
$e=mysqli_query($con,$qu);
$e=mysqli_fetch_array($e);
$nam=$_POST['nam'];
$dam=$_POST['dam'];
$pam=$_POST['pam'];
$caam=$_POST['caam'];
$duam=$_POST['duam'];
$stam=$_POST['stam'];
$qu="insert into mv_movies (login_id,theatre_id,movie_name,director,producer,casting,durations,story) values('".$qe['id']."','".$e['id']."','".$nam."','".$dam."','".$pam."','".$caam."','".$duam."','".$stam."')";
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