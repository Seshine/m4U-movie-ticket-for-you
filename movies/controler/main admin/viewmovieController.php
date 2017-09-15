<?php
include("../connection/config.php"); 




$qu="select mv_movies.id ,mv_movies.status  ,  mv_movies.movie_name,mv_theatre.name 
from mv_movies 
join mv_theatre on mv_movies.theatre_id=mv_theatre.id ";
$ee=mysqli_query($con,$qu);
?>