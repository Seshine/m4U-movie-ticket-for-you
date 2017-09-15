<?php
include("../connection/config.php"); 
$q="select * from mv_city where id='".$_REQUEST['id']."'";
$d=mysqli_query($con,$q);
$ps=mysqli_fetch_array($d);


if(isset($_POST['subloci']))
{
$state= $_POST["selboxs"];
$city=$_POST['cityname'];
$q1="UPDATE mv_city SET city_name='".$city."' WHERE id=".$_REQUEST['id']." ";
$d1=mysqli_query($con,$q1);
if($d1)
{
?>
<script>
  window.location="../main admin/table-city.php";
</script>

<?php


}
else
{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);

}}





?>