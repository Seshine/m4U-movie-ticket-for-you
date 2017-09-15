

 



<?php
include("../connection/config.php"); 

$q="select * from mv_country";
$d=mysqli_query($con,$q);

if(isset($_POST['subloc']))
{


$countryname= $_POST["countryname"];
//check country
$q1="select * from mv_country where country_name ='".$countryname."'";
	//check country is existing
	$flag=mysqli_num_rows(mysqli_query($con,$q1));


if($flag>=1){
	?> <script>
	alert("already exsist");
	</script>
	<?php 
}
else{
$q1="INSERT INTO mv_country (country_name) VALUES ('".$countryname."')";
$d1=mysqli_query($con,$q1); 
if($d1)
{
?>
<script>
  window.location="../main admin/table-basic.php";
</script>

<?php

 echo "table created";
}
else
{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);

}}
}
?>
