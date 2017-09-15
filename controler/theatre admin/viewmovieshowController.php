<?php
include("../connection/config.php"); 


$qux="select  mv_setmovie.id,mv_movies.movie_name,  mv_theatre.name 
from mv_setmovie
join mv_theatre on mv_theatre.id=mv_setmovie.theatre_id
join mv_movies on mv_movies.id=mv_setmovie.movie_id

";

$darth=mysqli_query($con,$qux);


?>