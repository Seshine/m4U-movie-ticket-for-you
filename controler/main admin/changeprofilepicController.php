<?php
include("../connection/config.php"); 

$qm="select profilepics from mv_admindetails where username='".$_SESSION['userida']."'";
			$ques=mysqli_fetch_array(mysqli_query($con,$qm));
			
if(isset($_POST['savepics'])){

		$target_dir = "../../movies/main admin/assets/";
		
		
		$target_file = $target_dir. basename($_FILES["fpics"]["name"]);
		$temp_name=$_FILES["fpics"]["tmp_name"];
		echo $temp_name;
		
			$poster=rand().$_FILES["fpics"]["name"];
	
			
			
			move_uploaded_file($temp_name, $target_dir.$poster);
			
			$qu="update mv_admindetails set profilepics='".$poster."' where username='".$_SESSION['userida']."'";
			$qu=mysqli_query($con,$qu);
			if($qu)
			{
			?>
            <script>window.location="../main admin/profile.php"</script>
            <?php
			}
			
}
?>
