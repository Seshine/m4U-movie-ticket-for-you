<?php
include("../connection/config.php");
$qe="select id from mv_login where username='".$_SESSION['userid']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);



$qu="select * from mv_movies where id='".$_REQUEST['id']."'";
$data=mysqli_query($con,$qu);
$data=mysqli_fetch_array($data);
$qu="select * from mv_theatre where id='".$data['theatre_id']."'";
$data2=mysqli_query($con,$qu);
$data2=mysqli_fetch_array($data2);

$qu="select mv_showcategory.showname from mv_showcategory
join mv_show on mv_show.showtypeid=mv_showcategory.id
where mv_show.theatre_id='".$data2['id']."'
";
$data3=mysqli_query($con,$qu);

$qu="select mv_screencategory.screenname from mv_screencategory
join mv_screen on mv_screen.screentypeid=mv_screencategory.id
where mv_screen.theatre_id='".$data2['id']."'
";
$data4=mysqli_query($con,$qu);


/*$qu="select * from mv_show
where theatre_id='".$data2['id']."'";
$data3=mysqli_query($con,$qu);
$qu="select * from mv_screen
where theatre_id='".$data2['id']."'";
$data4=mysqli_query($con,$qu);*/

?>