
<?php

if(isset($_GET['addseat']))
{
$loc=$_GET['theatreid1'];
$q="insert into mv_booking(noseat,status,account) values('$loc','$loc','0')";
$qe=mysqli_query($con,$q);

}
?>