<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php include('../../connection/config.php'); 
$qry1="select * from mv_country";
$data='mysqli_query($conn,$qry1)';
if(isset($_POST['adddcountry'])
{
$countryname=$_POST['countryname'];
$qry2="insert into mv_country('country_name') values ('$countryname')";
$execu='mysqli_query($conn,$qry2)';



?>

</body>
</html>
