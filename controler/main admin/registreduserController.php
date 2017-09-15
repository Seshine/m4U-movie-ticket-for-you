
<?php

include("../connection/config.php");
$qu=mysqli_query($con,'select * from mv_userregistrations');

$r=mysqli_num_rows($qu);
$qu=mysqli_query($con,'select * from mv_theatreregistrations
');

$re=mysqli_num_rows($qu);

?>
