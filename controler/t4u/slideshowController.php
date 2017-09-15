
<?php
include("connection/config.php"); 
$que="select  mv_movies.id, mv_poster.smallposter,mv_movies.movie_name
from mv_poster 
join mv_movies on mv_movies.id=mv_poster.movie_id
where mv_movies.status='1'
order by mv_poster.id desc";
$qu=mysqli_query($con,$que);
$c=count("select bigposter from mv_poster");
$ques="select * from  mv_poster";


$qus=mysqli_query($con,$ques);

mysqli_data_seek($qus,$c+1);
$ps=mysqli_fetch_array($qus);

?>
