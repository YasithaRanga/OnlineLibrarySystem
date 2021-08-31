<?php 
	include 'assets/globalHeader.php';
?>

		<div class="welcomeMsgContainer">
			<h1 class="welcomeMsg">Welcome, <?php echo $_SESSION['username'];?></h1>
		</div>
		<div class="adminsManager" id="admins">
			<h1 class="sectionTitle">Administrators</h1>
			<div class="adminAdd">	
				<button class="btnAdminAdd" onClick="popUp()">Add Administrator</button>
				<div class="adminAddStatus">
						<?php
							if(isset($_SESSION['adminSuccess'])&& $_SESSION['adminSuccess']!="")
							{
								echo $_SESSION['adminSuccess'];
								unset($_SESSION['adminSuccess']);
							}
							if(isset($_SESSION['adminStatus'])&& $_SESSION['adminStatus']!="")
							{
								echo $_SESSION['adminStatus'];
								unset($_SESSION['adminStatus']);
							}
						?>
				</div>
				<?php include($IPATH."adminForm.php") ?>
			</div>
			<table class="adminDataTable">
				<tr class="TitleRow">
					<th class="TitleHeader">ID</th>
					<th class="TitleHeader">Username</th>
					<th class="TitleHeader">Password</th>
					<th class="TitleHeader">Edit</th>
					<th class="TitleHeader">Delete</th>
				</tr>
			<?php 
				
				require 'assets/dbpath.php';
				$query = "SELECT * FROM admins";
				$query_run = mysqli_query($connection, $query);
				$check_admins = mysqli_num_rows($query_run) > 0;
				if($check_admins)
				{
					while($row = mysqli_fetch_array($query_run))
					{
					?>
						<tr class="dataRow">
							<td class="dataCell"><?php echo $row['ID'];?></td>
							<td class="dataCell"><?php echo $row['username'];?></td>
							<td class="dataCell"><?php echo $row['password'];?></td>
							<td class="dataCell">
								<form action="adminUpdate.php" method="post">
									<input type="hidden" name="edit_ID" value="<?php echo $row['ID'];?>">
									<button class="btnEdit" name="edit_btn">Edit</button>
								</form>
							</td>
							<td class="dataCell">
								<form action="assets/adminDelete.php" method="post">
									<input type="hidden" name="delete_ID" value="<?php echo $row['ID'];?>">
									<button class="btnDelete" name="delete_btn">Delete</button>
								</form>
							</td>
						</tr>						
					<?php
					}
				}
				else
				{	
					$_SESSION['adminStatus'] = "No Record Found";
				}
				?>
				
			</table>
		
		</div>
<?php include 'assets/globalFooter.php';?>