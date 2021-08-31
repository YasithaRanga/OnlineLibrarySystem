<?php 
	include 'assets/globalHeader.php';
?>
<script>
			function validate()
			{
				if((document.adminUpdateForm.adminUsername.value=="")||(document.adminUpdateForm.adminPassword.value=="")||(document.adminUpdateForm.adminConfirmPassword.value==""))
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
		<div class="adminUpdateContainer" id="adminUpdateContainer">
			<h2 class="adminUpdateFormTitle">Edit Administrator</h2>
				<?php
				require 'assets/dbpath.php';
				
				if(isset($_POST['edit_btn']))
				{
					$id = $_POST['edit_ID'];

					$query = "SELECT * FROM admins WHERE ID='$id'";
					$query_run = mysqli_query($connection, $query);

					foreach($query_run as $row)
					{
					?>
					<form class="adminUpdateForm" name="adminUpdateForm" action="assets/adminUpdateData.php" method="post">
						<input type="hidden" name="edit_ID" value="<?php echo $row['ID'];?>">
						<h2 id="adminUpdateTitle">Username</h2>
						<input id="adminUpdateInput" type="text" name="edit_adminUsername" placeholder="Username" value="<?php echo $row['username'];?>">
						<h2 id="adminUpdateTitle">Password</h2>
						<input id="adminUpdateInput" type="password" name="edit_adminPassword" placeholder="Password" value="<?php echo $row['password'];?>">
						<br><br><br>
						<input type="submit" id="btnAdminUpdate" name="adminUpdate_btn" value="Update" onClick="return validate()">
						<button id="adminUpdateCancel" name="adminUpdateCancel_btn">Cancel</button>
						
					</form>
					<?php
					}
				}


			?>	
		</div>
		



<?php include 'assets/globalFooter.php';?>