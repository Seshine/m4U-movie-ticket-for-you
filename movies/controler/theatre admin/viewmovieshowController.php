<?php
include("../connection/config.php"); 


$qu="SELECT mv_setmovie.id,mv_movies.movie_name, mv_theatre.name , mv_screen.scname ,mv_show.showname,mv_show.showdate
FROM mv_setmovie
 JOIN mv_movies
ON mv_setmovie.movie_id=mv_movies.id
 JOIN mv_theatre
ON mv_setmovie.theatre_id=mv_theatre.id
 JOIN mv_screen
ON mv_setmovie.screen_id=mv_screen.id
 JOIN mv_show
ON mv_setmovie.show_id=mv_show.id";

$da=mysqli_query($con,$qu);


?>