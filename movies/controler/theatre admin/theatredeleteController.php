
<?php
include("../connection/config.php"); 


if(isset($_POST['cdelete'])){
$id=$_POST['did']; 


$sql = "DELETE FROM mv_theatre
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

