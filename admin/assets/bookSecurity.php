<?php
	if(!$_SESSION['username'])
	{
		header('Location: ../../admin');
	}
?>