<?php
include("../connection/config.php"); 


$qe="select id from mv_login where username='".$_SESSION['userid']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);
$qu="select * from mv_show where login_id='".$qe['id']."'";
$set=$_REQUEST['id'];
$movie_id=$_REQUEST['id2'];
$shows=mysqli_query($con,"select 
	ms.id as id,
	mc.showname as showname
	 from mv_show ms 
	 join mv_showcategory mc 
	 on mc.id=ms.showtypeid 
	 where ms.theatre_id='".$set."' and ms.login_id='".$qe['id']."'");
$screens=mysqli_query($con,"select
    ms.id as id,
	mc.screenname as screenname
   from mv_screen ms
   join mv_screencategory mc 
	 on mc.id=ms.screentypeid 
  where ms.theatre_id='".$set."'and ms.login_id='".$qe['id']."'");
$smovies=mysqli_query($con,"select 
	ms.id as id,
	mm.movie_name as movie,
	mc.showname as showname,
	msc.screenname as screen,
	ms.datefrom as datefrom,
	ms.dateto as dateto  
	from mv_setmovie ms 
	join mv_movies mm on mm.id=ms.movie_id 
	join mv_show mh on mh.id=ms.show_id 
	join mv_showcategory mc on mc.id=mh.showtypeid 
	join mv_screen mr on mr.id=ms.screen_id 
	join mv_screencategory msc on msc.id=mr.screentypeid 
	where ms.login_id='".$qe['id']."' 
	and ms.theatre_id='".$set."' 
	and ms.movie_id='".$movie_id."'");

if(isset($_POST['setmovie']))
{
/*
$qu="select * from mv_movies where id='".$_REQUEST['id']."'";
$e=mysqli_query($con,$qu);
$ep=mysqli_fetch_array($e);
$qu="select * from mv_show where showname='".$_POST['mvshow']."'";
$es=mysqli_query($con,$qu);
$ee=mysqli_fetch_array($es);
$qu="select * from mv_screen where name='".$_POST['mvscreen']."'";
$e=mysqli_query($con,$qu);
$eee=mysqli_fetch_array($e);
*/
$movieid=$movie_id;
$theatreid=$set;
$showid=$_POST['mvshow'];
$screenid=$_POST['mvscreen'];
$datefrom=$_POST['stdate'];
$dateto=$_POST['enddate'];
$qy="insert into mv_setmovie(login_id,theatre_id,movie_id,show_id,screen_id,datefrom,dateto)values('".$qe['id']."','".$theatreid."','".$movieid."','".$showid."','".$screenid."','".$datefrom."','".$dateto."')";
$qt=mysqli_query($con,$qy);

if($qt)
{
?>
<script>window.location="../theatre admin/setmovie.php?id=<?php echo $set ?>&&id2=<?php echo $movie_id ?>&&msg=a";</script>
<?php
}
else
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
 
 }

 if(isset($_POST['moviesettingsdelete'])){

 	$res=mysqli_query($con,"delete from mv_setmovie where id='".$_POST['deletesettingsid']."'");
 	if($res){
 	 ?>
<script>window.location="../theatre admin/setmovie.php?id=<?php echo $set ?>&&id2=<?php echo $movie_id ?>&&msg=d";</script>
<?php	
 	}
 }
 ?>