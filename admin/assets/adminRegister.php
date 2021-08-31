<?php
include 'adminSecurity.php';

require 'dbpath.php';

if(isset($_POST['adminSubmit']))
{
	$username = $_POST['adminUsername'];
	$password = $_POST['adminPassword'];
	
	$query = "INSERT INTO admins (username,password) VALUES('$username','$password')";
	$query_run = mysqli_query($connection, $query);
	
	if($query_run)
	{
		$_SESSION['adminSuccess'] = "Admin Profile Added Successfully";
		header('Location: ../dashboard.php#admins');
	}
	else
	{	
		$_SESSION['adminStatus'] = "Admin Profile Not Added";
		header('Location: .../dashboard.php#admins');
	}
}
if(isset($_POST['adminCancel']))
{	
	$_SESSION['adminStatus'] = "Admin Profile Adding Cancelled";
	header('Location: ../dashboard.php#admins');
}


?>