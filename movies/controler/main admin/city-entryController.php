

<?php

include("../connection/config.php"); 


$qu="SELECT mv_city.id,  mv_city.city_name,  mv_country.country_name,  mv_state.state_name,  mv_city.created_at 
FROM mv_city
JOIN mv_state ON mv_city.state_id=mv_state.id 
JOIN mv_country ON mv_country.id=mv_state.country_id";
$das=mysqli_query($con,$qu);
$qu="select * from mv_state";
$de=mysqli_query($con,$qu);
if(isset($_POST['addc']))
{

$state=$_POST['selboxs'];
$cityname= $_POST["cityname"];
$qu="select * from mv_state where state_name='".$state."' ";
$da1=mysqli_query($con,$qu);
$da1=mysqli_fetch_array($da1);
$c=mysqli_num_rows(mysqli_query($con,"select * from mv_city where city_name like '".$cityname."'"));
if($c>=1){
?>	<script>
  window.location="../main admin/table-city.php?idd=2";
</script>
<?php 
}
else{


$qurys="INSERT INTO mv_city (state_id,city_name) VALUES ('".$da1['id']."','".$cityname."')";
$ex=mysqli_query($con,$qurys);

if($ex)
{
?>

<script>
 window.location="../main admin/table-city.php?idd=1";
 </script>

<?phP
}

}


}

?>


