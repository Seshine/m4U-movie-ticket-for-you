
<?php
include("../connection/config.php"); 


 if(isset($_POST['mdelete'])){
$id=$_POST['did']; 


$sql = "DELETE FROM mv_movies
        WHERE id='".$id."' ";
if($s=mysqli_query($con,$sql))
{
?>
<script>window.location="../theatre admin/viewmovie.php";</script>
<?php

}
mysqli_close($con);
}
?>

