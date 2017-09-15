
<?php
include("../connection/config.php");
 $qe="select id from mv_login where username='".$_SESSION['useridu']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);
if(isset($_REQUEST['id']))
{
$r=mysqli_fetch_array(mysqli_query($con,"select sc.amount as amount from mv_setmovie sm join mv_screen msc on msc.id=sm.screen_id join  mv_screencategory sc on sc.id =msc.screentypeid  where sm.movie_id= '".$_REQUEST['id']."'"));

$tottalamount=$r['amount'] * $_GET['nseat'];
$q="insert into mv_booking(movie_id,login_id,noseat,status,amount) values('".$_REQUEST['id']."','".$qe['id']."','".$_GET['nseat']."','0','".$tottalamount."')";
$qe=mysqli_query($con,$q);
if($qe)
?>
<script>window.location="bookingdetails.php"; </script>
<?php
}
?>