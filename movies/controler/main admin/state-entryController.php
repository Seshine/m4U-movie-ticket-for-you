

<?php

include("../connection/config.php"); 




$qu="SELECT mv_state.id, mv_country.country_name AS country, mv_state.state_name, mv_state.created_at
FROM mv_state
 JOIN mv_country
ON mv_state.country_id=mv_country.id";

$da=mysqli_query($con,$qu);

if(isset($_POST['sublos']))
{
$country=$_POST['selbox'];
$statename= $_POST["statename"];
$qu="select * from mv_country where country_name='".$country."' ";
$da1=mysqli_query($con,$qu);
$da1=mysqli_fetch_array($da1);
$c=mysqli_num_rows(mysqli_query($con,"select * from mv_state where state_name like '".$statename."'"));
if($c>=1){
?>	<script>
  window.location="../main admin/table-state.php?idd=2";
</script>
<?php 
}
else{
	$qury="INSERT INTO mv_state (country_id,state_name) VALUES ('".$da1['id']."','".$statename."')";
$ex=mysqli_query($con,$qury);

if($ex)
{
?>

<script>
 window.location="../main admin/table-state.php?idd=1";
 </script>

<?phP
}




}


}




?>


