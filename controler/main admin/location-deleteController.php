
<?php
include("../connection/config.php"); 


 if(isset($_POST['cdelete'])){
$id=$_POST['did']; 


$sql = "DELETE FROM mv_country
        WHERE id='".$id."' ";
$s=mysqli_query($con,$sql);


mysqli_close($con);
}
?>

