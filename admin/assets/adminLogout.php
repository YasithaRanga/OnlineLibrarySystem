<?php
	include 'adminSecurity.php';
	if(isset($_POST['btn_logout']))
	{
		session_destroy();
		unset($_SESSION['username']);
		header('Location: ../');
	}

?>