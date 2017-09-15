
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


