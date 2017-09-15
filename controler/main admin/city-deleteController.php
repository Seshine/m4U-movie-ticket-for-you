

<?php

include("../connection/config.php"); 
 if(isset($_POST['cidelete'])){

$id=$_POST['did'];

$sql = "DELETE FROM mv_city
        WHERE id='".$id."'  ";
if($sa=mysqli_query($con,$sql))
?>
<script>window.location="../main admin/table-city.php";</script>
<?php


mysqli_close($con);
}
?>
