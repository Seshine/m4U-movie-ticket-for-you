<?php
include("../connection/config.php"); 

$qm="select profilepics from mv_userregistrations where username='".$_SESSION['useridu']."'";
			$ques=mysqli_fetch_array(mysqli_query($con,$qm));
			
if(isset($_POST['savepics'])){

		$target_dir = "../../movies/users/assets/";
		
		
		$target_file = $target_dir. basename($_FILES["fpics"]["name"]);
		$temp_name=$_FILES["fpics"]["tmp_name"];
		
			$poster=rand().$_FILES["fpics"]["name"];
	
			
			
			move_uploaded_file($temp_name, $target_dir.$poster);
			
			$qu="update mv_userregistrations set profilepics='".$poster."' where username='".$_SESSION['useridu']."'";
			$qu=mysqli_query($con,$qu);
			if($qu)
			{
			?>
            <script>window.location="../users/profile.php"</script>
            <?php
			}
			
}
?>
