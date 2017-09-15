<?php
include("../connection/config.php"); 
$q="select * from mv_state where id='".$_REQUEST['id']."'";
$d=mysqli_query($con,$q);
$ps=mysqli_fetch_array($d);


if(isset($_POST['sublose']))
{
$countryname= $_POST["selbox"];
$states=$_POST['statename'];
$q1="UPDATE mv_state SET state_name='".$states."' WHERE id=".$_REQUEST['id']." ";
$d1=mysqli_query($con,$q1);
if($d1)
{
?>
<script>
  window.location="../main admin/table-state.php";
</script>

<?php


}
else
{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);

}}





?>