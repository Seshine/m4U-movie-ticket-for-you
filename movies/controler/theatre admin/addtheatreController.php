<?php
include("../connection/config.php"); 

 $qe="select id from mv_login where username='".$_SESSION['userid']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);
  
$shows=mysqli_query($con,"select * from mv_showcategory where login_id='".$qe['id']."'");
$screens=mysqli_query($con,"select * from mv_screencategory where login_id='".$qe['id']."'");
$qu="select 
mv_theatre.name as name,
mv_theatre.id as id,
mv_theatre.address as address,
mv_theatre.pincode as pincode,
mv_theatre.phone_number as phone_number,
mv_theatre.status as status,
mv_theatre.created_at as created_at,
mv_city.city_name as city_name 
from mv_theatre join mv_city on mv_city.id=mv_theatre.city_id 
where mv_theatre.status='1' and mv_theatre.login_id='".$qe['id']."'";
$de=mysqli_query($con,$qu);
$qu="select * from mv_city";
$d=mysqli_query($con,$qu);
if(isset($_POST['sat']))
{
$cat=$_POST['cat'];
$qu="select * from mv_city where city_name='".$cat."'";
$qu=mysqli_query($con,$qu);
$qus=mysqli_fetch_array($qu);
$nat=$_POST['nat'];
$aat=$_POST['aat'];
$pat=$_POST['pat'];
$coat=$_POST['coat'];
$created_at=$_POST['created_at'];

$qu="insert into mv_theatre (login_id,city_id,name,address,pincode,phone_number,created_at) values('".$qe['id']."','".$qus['id']."','".$nat."','".$aat."','".$pat."','".$coat."','".$created_at."')";
$qu=mysqli_query($con,$qu);
if($qu)
{
?>
<script>window.location="../theatre admin/view theatre.php?idd=1";</script>
<?php
}
else
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
 
 }

 if(isset($_POST['addshowstype'])){

      $theater_id=$_POST['theaterid'];
      $showtypeid=$_POST['showcat'];
      $login_id=$qe['id'];
      foreach($showtypeid as $show){
      	 $res=mysqli_query($con,"insert into mv_show(login_id,theatre_id,showtypeid)values('".$login_id."','".$theater_id."','".$show."')");
     
      }
      if($res){
      	?>
<script>window.location="../theatre admin/view theatre.php?idd=3";</script>
<?php
      }
      else{
      	 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
      }
 }
 if(isset($_POST['addscreentype'])){

     
      $theater_id=$_POST['theaterid2'];
      $screentypeid=$_POST['screencat'];
      $login_id=$qe['id'];
      foreach($screentypeid as $screen){
         $res=mysqli_query($con,"insert into mv_screen(login_id,theatre_id,screentypeid)values('".$login_id."','".$theater_id."','".$screen."')");
     
      }
      if($res){
        ?>
<script>window.location="../theatre admin/view theatre.php?idd=4";</script>
<?php
      }
      else{
         echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
      }
 }

 ?>