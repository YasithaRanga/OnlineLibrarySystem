<?php
	include 'adminSecurity.php';
	require 'dbpath.php';

	if(isset($_POST['adminLoginCancel']))
	{
		header('Location: ../../');
	}
	if(isset($_POST['adminLoginSubmit']))
	{
		$loginUsername = $_POST['adminLoginUsername'];
		$loginPassword = $_POST['adminLoginPassword'];
		
		
		$query = "SELECT * FROM admins WHERE username='$loginUsername' AND password='$loginPassword'";
		$query_run = mysqli_query($connection,$query);
		   
		if(mysqli_fetch_array($query_run))
		{
			$_SESSION['username'] = $loginUsername;
			header('Location: ../dashboard.php');
		}
		else
		{
			$_SESSION['status'] = "Username or Password is Invalid";
			header('Location: ../');
		}
	}
	

?>