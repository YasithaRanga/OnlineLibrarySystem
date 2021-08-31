<?php
	session_start();
	require 'dbpath.php';
	if(isset($_POST['adminUpdateCancel_btn']))
	{
		$_SESSION['adminStatus'] = "Admin Profile Update Cancelled";
		header('Location: ../dashboard.php#admins');
	}

	if(isset($_POST['adminUpdate_btn']))
	{
		$id = $_POST['edit_ID'];
		$username = $_POST['edit_adminUsername'];
		$password = $_POST['edit_adminPassword'];
		   
		$query = "UPDATE admins SET username='$username', password='$password' WHERE ID='$id'";
		$query_run = mysqli_query($connection,$query);
		   
		if($query_run)
		{
			$_SESSION['adminSuccess'] = "Admin Profile Updated Successfully";
			header('Location: ../dashboard.php#admins');
		}
		else
		{
			$_SESSION['adminStatus'] = "Admin Profile Not Updated";
			header('Location: ../dashboard.php#admins');
		}
	}
	

?>