<?php
	include 'adminSecurity.php';
	require 'dbpath.php';

	if(isset($_POST['delete_btn']))
	{
		$id = $_POST['delete_ID'];
		
		$query = "DELETE FROM admins WHERE ID='$id'";
		$query_run = mysqli_query($connection,$query);
		   
		if($query_run)
		{
			$_SESSION['adminSuccess'] = "Admin Profile Deleted Successfully";
			header('Location: ../dashboard.php#admins');
		}
		else
		{
			$_SESSION['adminStatus'] = "Admin Profile Not Deleted";
			header('Location: ../dashboard.php#admins');
		}
	}
	

?>