<?php
include("../connection/config.php"); 
$qe="select * from mv_poster where movie_id='".$_REQUEST['id']."' ";
  $qe=mysqli_query($con,$qe);
   
if(isset($_POST['saveposter'])){
       
		$target_dir_s = "../../movies/posters/small/";
		$target_dir_b = "../../movies/posters/big/";
		
		$target_file_s = $target_dir_s . basename($_FILES["sposter"]["name"]);
		$tmp_name_s=$_FILES["sposter"]["tmp_name"];
		
			$poster_s=rand().$_FILES["sposter"]["name"];
			
	    $target_file_b = $target_dir_b . basename($_FILES["bposter"]["name"]);
		$tmp_name_b=$_FILES["bposter"]["tmp_name"];
		
			$poster_b=rand().$_FILES["bposter"]["name"];
			
			
			  $target_file_b2 = $target_dir_b . basename($_FILES["b2poster"]["name"]);
		$tmp_name_b2=$_FILES["b2poster"]["tmp_name"];
		
			$poster_b2=rand().$_FILES["b2poster"]["name"];
			  $target_file_b3 = $target_dir_b . basename($_FILES["b3poster"]["name"]);
		$tmp_name_b3=$_FILES["b3poster"]["tmp_name"];
		
			$poster_b3=rand().$_FILES["b3poster"]["name"];
			
			
			move_uploaded_file($tmp_name_s, $target_dir_s.$poster_s);
			move_uploaded_file($tmp_name_b, $target_dir_b.$poster_b);
			move_uploaded_file($tmp_name_b2, $target_dir_b.$poster_b2);
			move_uploaded_file($tmp_name_b3, $target_dir_b.$poster_b3);
			
			$title=$_POST['postertitle'];
			$movie_id=$_REQUEST['id'];
		    $result=mysqli_query($con,"insert into 
			mv_poster(movie_id,poster_name,smallposter,bigposter,bigposter2,bigposter3)
			values('".$movie_id."','".$title."','".$poster_s."','".$poster_b."','".$poster_b2."','".$poster_b3."')");
			if($result){
			   ?> 
			   
			     <script>window.location="addposter.php?msg=1&id=<?php echo $movie_id; ?>";</script> 
			   
			   <?php
			}
	
	
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