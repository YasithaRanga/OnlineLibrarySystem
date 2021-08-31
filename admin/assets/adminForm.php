<script>
		function popUp()
		{
			var popup = document.getElementById("adminFormContainer");
			popup.classList.toggle("show");
		}
		function validate()
		{
			if((document.adminAddForm.adminUsername.value=="")||(document.adminAddForm.adminPassword.value=="")||(document.adminAddForm.adminConfirmPassword.value==""))
				{
					window.alert("Fields are empty");
					return(false);
				}
			if(!(document.adminAddForm.adminPassword.value==document.adminAddForm.adminConfirmPassword.value))
			{
				window.alert("Passwords do not match");
				return(false);
			}
		}
</script>
<div class="adminFormContainer" id="adminFormContainer">
	<h2 class="adminFormTitle">Add Administrator</h2>
	<form class="adminAddForm" name="adminAddForm" action="assets/adminRegister.php" method="post">
		<h2 id="adminAddTitle">Username</h2>
		<input id="adminInput" type="text" name="adminUsername" placeholder="Username">
		<h2 id="adminAddTitle">Password</h2>
		<input id="adminInput" type="password" name="adminPassword" placeholder="Password">
		<h2 id="adminAddTitle">Confirm Password</h2>
		<input id="adminInput" type="password" name="adminConfirmPassword" placeholder="Confirm Password">
		<br><br>
		<input type="submit" id="btnAdminSubmit" name="adminSubmit" onClick="return validate()">
		<button id="adminCancel" name="adminCancel" onClick="popUp()">Cancel</button>
	</form>
</div>
	