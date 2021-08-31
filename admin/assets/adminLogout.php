<?php
	session_start();
	if(isset($_POST['btn_logout']))
	{
		unset($_SESSION['username']);
		header('Location: ../');
	}

?>