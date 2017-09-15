<?php
include("../connection/config.php"); 
$qe="select id from mv_login where username='".$_SESSION['userid']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);
$sid=$_REQUEST['id'];
$screenq="select mv_show.id as id, mv_showcategory.showname as showname,mv_showcategory.timefrom as timefrom,mv_showcategory.timeto as timeto from mv_show 
join mv_showcategory on mv_showcategory.id=mv_show.showtypeid
where mv_show.login_id='".$qe['id']."' and mv_show.theatre_id='".$_REQUEST['id']."'";
$shows=mysqli_query($con,$screenq);
if(isset($_POST['theatershowdelete'])){
	$deleteid=$_POST['deletecatid'];
	$sql=mysqli_query($con,"delete from mv_show where id='".$deleteid."'");
	if($sql){
		?>
       <script>window.location="../theatre admin/viewtheatershow.php?id=<?php echo $sid; ?>&&idd=1";</script>
           <?php
	}
}

 ?>