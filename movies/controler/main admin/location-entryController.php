

 



<?php
include("../connection/config.php"); 

$q="select * from mv_country";
$d=mysqli_query($con,$q);

if(isset($_POST['subloc']))
{


$countryname= $_POST["countryname"];
//check existance 
$c=mysqli_num_rows(mysqli_query($con,"select * from mv_country where country_name like '".$countryname."'"));
if($c>=1){
?>	<script>
  window.location="../main admin/table-basic.php?idd=2";
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
  window.location="../main admin/table-basic.php?idd=1";
</script>

<?php

 
}
else
{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);

}
}
}
?>
