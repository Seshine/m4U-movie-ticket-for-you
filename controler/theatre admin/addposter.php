<?php
include("../connection/config.php"); 
$qe="select id from mv_login where username='".$_SESSION['userid']."' ";
  $qe=mysqli_query($con,$qe);
    $qe=mysqli_fetch_array($qe);

  $posters=mysqli_query($con,"select * from mv_poster where login_id='".$qe['id']."' and movie_id='".$_REQUEST['id']."'");

if(isset($_POST['saveposter'])){
       
		$target_dir_s = "../../movies/posters/small/";
		$target_dir_b = "../../movies/posters/big/";
		
		$target_file_s = $target_dir_s . basename($_FILES["sposter"]["name"]);
		$tmp_name_s=$_FILES["sposter"]["tmp_name"];
		
			$poster_s=rand().$_FILES["sposter"]["name"];
			
	    $target_file_b = $target_dir_b . basename($_FILES["bposter"]["name"]);
		$tmp_name_b=$_FILES["bposter"]["tmp_name"];
		
			$poster_b=rand().$_FILES["bposter"]["name"];
			
			
			move_uploaded_file($tmp_name_s, $target_dir_s.$poster_s);
			move_uploaded_file($tmp_name_b, $target_dir_b.$poster_b);
			
			$title=$_POST['postertitle'];
			$movie_id=$_REQUEST['id'];
		    $result=mysqli_query($con,"insert into mv_poster(login_id,movie_id,poster_name,smallposter,bigposter)
			values('".$qe['id']."','".$movie_id."','".$title."','".$poster_s."','".$poster_b."')");
			if($result){
			   ?> 
			   
			     <script>window.location="addposter.php?msg=1&id=<?php echo $movie_id; ?>";</script> 
			   
			   <?php
			}
	//..
	
}
if(isset($_POST['posterdelete'])){
	$movie_id=$_REQUEST['id'];
	$result=mysqli_query($con,"delete from mv_poster where id='".$_POST['deleteposterid']."'");
	if($result){
		?> 
			   
			     <script>window.location="addposter.php?msg=2&id=<?php echo $movie_id; ?>";</script> 
			   
			   <?php
	}
}