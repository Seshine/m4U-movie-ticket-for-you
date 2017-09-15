
<?php
include("../connection/config.php"); 


if(isset($_POST['scdelete'])){
$id=$_POST['did']; 


$sql = "DELETE FROM mv_screen
        WHERE id='".$id."' ";
if($s=mysqli_query($con,$sql))
{
?>
<script>window.location="../theatre admin/view theatre.php";</script>

<?php

}
mysqli_close($con);
}
?>

