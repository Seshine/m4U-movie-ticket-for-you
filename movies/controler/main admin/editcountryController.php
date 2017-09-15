
<?php
$host="localhost";
$userId="root";
$password="";
$database="movies";
$con=mysqli_connect($host,$userId,$password,$database);
if(mysqli_connect_errno($con))
{
echo "failed to connect to mysql".mysqli_connect_error();
}
?>

<?php
session_start();
$q="select * from mv_country where id='".$_REQUEST['id']."'";
$d=mysqli_query($con,$q);
$p=mysqli_fetch_array($d);



if(isset($_POST['ucountry']))
{
$countryname= $_POST["countryname"];
$q1="Update mv_country SET country_name='".$countryname."' where id='".$_REQUEST['id']."'";
$d1=mysqli_query($con,$q1);
if($d1)
{
?>
<script>
  window.location="../main admin/table-basic.php";
</script>

<?php


}
else
{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);

}}





?>
