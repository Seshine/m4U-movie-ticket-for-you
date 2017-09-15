
<?php
include("connection/config.php"); 
$que="select * from  mv_poster  where movie_id='".$_REQUEST['id']."'";


$qu=mysqli_query($con,$que);
$pass=$_REQUEST['id'];
?>
