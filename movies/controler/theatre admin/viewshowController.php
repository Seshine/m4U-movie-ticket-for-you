<?php
include("../connection/config.php"); 



$qu="SELECT  mv_show.id, mv_show.startshow, mv_show.am_pm, mv_show.endshow, mv_theatre.name,mv_show.showdate
FROM mv_show
 JOIN mv_theatre
ON mv_show.theatre_id=mv_theatre.id";
$qs=mysqli_query($con,$qu);

 ?>