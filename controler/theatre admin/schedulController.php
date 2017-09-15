

<?php
include("../connection/config.php"); 

 $qe="select id from mv_login where username='".$_SESSION['userid']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);
//take bookin tabel

$u=mysqli_query($con,"select * from mv_booking where login_id='".$qe['id']."' ");
$u=mysqli_fetch_array($u);
$eu=mysqli_fetch_array(mysqli_query($con,"select * from mv_setmovie where movie_id='".$u['movie_id']."'"));
$ers="select mv_movies.movie_name,mv_booking.movie_id,mv_booking.amount,mv_booking.login_id,mv_booking.id as w,mv_theatre.name,mv_theatre.address,mv_theatre.pincode,mv_theatre.phone_number,mv_movies.director,mv_movies.producer,mv_movies.casting,mv_movies.story,mv_setmovie.datefrom,mv_setmovie.dateto ,mv_booking.noseat ,mv_show.showtypeid,mv_screen.screentypeid ,mv_showcategory.showname,mv_showcategory.timefrom,mv_showcategory.timeto,mv_screencategory.screenname,mv_screencategory.sctype , mv_screencategory.seats      from mv_setmovie
join mv_booking on mv_booking.movie_id=mv_setmovie.movie_id
join mv_movies on mv_movies.id=mv_setmovie.movie_id
join mv_theatre on mv_theatre.id=mv_setmovie.theatre_id
join mv_show on mv_show.id=mv_setmovie.show_id
join mv_screen on mv_screen.id=mv_setmovie.screen_id
join mv_showcategory on mv_showcategory.id  =mv_show.showtypeid
join mv_screencategory on mv_screencategory.id  =mv_screen.screentypeid
where mv_setmovie.login_id='".$qe['id']."' 
";
$ers=mysqli_query($con,$ers);

if(isset($_POST['acceptbooking']))
{


$q=mysqli_query($con,"update mv_booking set status=1 where id ='".$_POST['bookingid']."'");

?>
<script>window.location="../theatre admin/printticket.php"</script>
<?php


}

if(isset($_POST['rejectbooking']))
{


$q=mysqli_query($con,"update mv_booking set status=0 where id ='".$_POST['did']."'");

}



?>