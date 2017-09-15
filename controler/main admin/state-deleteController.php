<?php
include("../connection/config.php"); 


 if(isset($_POST['sdelete'])){

$id=$_POST['did'];

$sql = "DELETE FROM mv_state
        WHERE id='".$id."'  ";
if($sa=mysqli_query($con,$sql))
?>
<script>window.location="../main admin/table-state.php";</script>
<?php


mysqli_close($con);
}
?>

