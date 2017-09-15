
<?php

include("../connection/config.php"); 
 if(isset($_POST['cdelete'])){
$id=$_POST['did']; 

$q="select status from mv_movies where id='".$id."'";
$q=mysqli_query($con,$q);
$q=mysqli_fetch_array($q);
if($q['status']==0)
{
$sql = "update mv_movies set status='1' 
        WHERE id='".$id."' ";
}
else
{
$sql = "update mv_movies set status='0' 
        WHERE id='".$id."' ";
}		
		
		$s=mysqli_query($con,$sql);




mysqli_close($con);
}
?>
