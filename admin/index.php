<!doctype html>
<html>
<head>
	<title>Abditory | Admin Login</title>
	<link rel="shortcut icon" type="image/jpg" href="../Image/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/adminLogin.css">
	<script>
	function validate()
		{
			if((document.adminLoginForm.adminLoginUsername.value=="")||(document.adminLoginForm.adminLoginPassword.value==""))
				{
					window.alert("Fields are empty");
					return(false);
				}
		}
	</script>
</head>

<body>
<?php 
	session_start();
?>
<div class="adminLoginFormContainer" id="adminFormContainer">
	<h2 class="adminLoginFormTitle">Administrator Login</h2>
	<form class="adminLoginForm" name="adminLoginForm" action="assets/adminLogin.php" method="post">
		<h2 id="adminLoginTitle">Username</h2>
		<input id="adminLoginInput" type="text" name="adminLoginUsername" placeholder="Username">
		<h2 id="adminLoginTitle">Password</h2>
		<input id="adminLoginInput" type="password" name="adminLoginPassword" placeholder="Password">
		<br><br><br>
		<input type="submit" id="btnAdminLogin" name="adminLoginSubmit" onClick="return validate()" value="Login">
		<button id="adminLoginCancel" name="adminLoginCancel">Cancel</button>
	</form>
	<div class="adminLoginStatus">
						<?php
							if(isset($_SESSION['status'])&& $_SESSION['status']!="")
							{
								echo $_SESSION['status'];
								unset($_SESSION['status']);
							}
						?>
	</div>
</div>
	
</body>
</html>