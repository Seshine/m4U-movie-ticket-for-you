

<?php
include("connection/config.php"); 
//get all  id
$qu="select * from  mv_setmovie where movie_id='".$_REQUEST['id']."'

";
$qqu=mysqli_query($con,$qu);
$dt=mysqli_fetch_array($qqu);
//theatre view
$qt="select * from mv_theatre where id='".$dt['theatre_id']."'";
$qpt=mysqli_query($con,$qt);
$pt=mysqli_fetch_array($qpt);
//take locations

$er=mysqli_fetch_array(mysqli_query($con,"select  mv_city.city_name, mv_state.state_name, mv_country.country_name  from mv_city
join mv_state on mv_state.id=mv_city.state_id
join mv_country on mv_country.id=mv_state.country_id
where mv_city.id='".$pt['city_id']."'"));

//show view
$pl="select * from mv_show where id='".$dt['show_id']."'";
$pl=mysqli_fetch_array(mysqli_query($con,$pl));
$l=mysqli_query($con,"select * from mv_showcategory where id='".$pl['showtypeid']."' ");
$lp=mysqli_fetch_array($l);
//screen view
$pl="select * from mv_screen where id='".$dt['screen_id']."'";
$pl1=mysqli_fetch_array(mysqli_query($con,$pl));
$l=mysqli_query($con,"select * from mv_screencategory where id='".$pl1['screentypeid']."' ");
$lp1=mysqli_fetch_array($l);

?>