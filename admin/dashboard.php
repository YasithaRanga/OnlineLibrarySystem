<?php 
	include 'assets/globalHeader.php';
?>

		<div class="welcomeMsgContainer">
			<h1 class="welcomeMsg">Welcome, <?php echo $_SESSION['username'];?></h1>
		</div>
		<!------ Admin Section --------->
		<div class="adminsManager" id="admins">
			<h1 class="sectionTitle">Administrators</h1>
			<div class="adminAdd">	
				<button class="btnAdminAdd" onClick="popUpAdmin()">Add Administrator</button>
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

		<!------ Book Section --------->
		<div class="booksManager" id="books">
			<h1 class="sectionTitle">Books</h1>
			<div class="bookAdd">	
				<button class="btnBookAdd" onClick="popUpBook()">Add a Book</button>
				<div class="bookAddStatus">
						<?php
							if(isset($_SESSION['bookSuccess'])&& $_SESSION['bookSuccess']!="")
							{
								echo $_SESSION['bookSuccess'];
								unset($_SESSION['bookSuccess']);
							}
							if(isset($_SESSION['bookStatus'])&& $_SESSION['bookStatus']!="")
							{
								echo $_SESSION['bookStatus'];
								unset($_SESSION['bookStatus']);
							}
						?>
				</div>
				<?php include($IPATH."bookForm.php") ?>
			</div>
			<table class="bookDataTable">
				<tr class="TitleRow">
					<th class="TitleHeader">ID</th>
					<th class="TitleHeader">Name</th>
					<th class="TitleHeader">Category</th>
					<th class="TitleHeader">Image</th>
					<th class="TitleHeader">Edit</th>
					<th class="TitleHeader">Delete</th>
				</tr>
			<?php 
				
				require 'assets/dbpath.php';
				$query = "SELECT * FROM books";
				$query_run = mysqli_query($connection, $query);
				$check_books = mysqli_num_rows($query_run) > 0;
				if($check_books)
				{
					while($row = mysqli_fetch_array($query_run))
					{
					?>
						<tr class="dataRow">
							<td class="dataCell"><?php echo $row['bookID'];?></td>
							<td class="dataCell"><?php echo $row['bookName'];?></td>
							<td class="dataCell"><?php echo $row['category'];?></td>
							<td class="dataCell"><img width="80px" src="../resources/pdf/coverpage/<?php echo $row['image'];?>"></td>
							<td class="dataCell">
								<form action="bookUpdate.php" method="post">
									<input type="hidden" name="editBook_ID" value="<?php echo $row['bookID'];?>">
									<button class="btnEdit" name="editBook_btn">Edit</button>
								</form>
							</td>
							<td class="dataCell">
								<form action="assets/bookDelete.php" method="post">
									<input type="hidden" name="deleteBook_ID" value="<?php echo $row['bookID'];?>">
									<button class="btnDelete" name="deleteBook_btn">Delete</button>
								</form>
							</td>
						</tr>						
					<?php
					}
				}
				else
				{	
					$_SESSION['bookStatus'] = "No Record Found";
				}
				?>
				
			</table>
		
		</div>

		<!------ Category Section --------->
		<div class="categoryManager" id="categories">
			<h1 class="sectionTitle">Categories</h1>
			<div class="categoryAdd">	
				<button class="btnCategoryAdd" onClick="popUpCategory()">Add a Category</button>
				<div class="categoryAddStatus">
						<?php
							if(isset($_SESSION['categorySuccess'])&& $_SESSION['categorySuccess']!="")
							{
								echo $_SESSION['categorySuccess'];
								unset($_SESSION['categorySuccess']);
							}
							if(isset($_SESSION['categoryStatus'])&& $_SESSION['categoryStatus']!="")
							{
								echo $_SESSION['categoryStatus'];
								unset($_SESSION['categoryStatus']);
							}
						?>
				</div>
				<?php include($IPATH."categoryForm.php") ?>
			</div>
			<table class="categoryDataTable">
				<tr class="TitleRow">
					<th class="TitleHeader">ID</th>
					<th class="TitleHeader">Category</th>
					<th class="TitleHeader">Image</th>
					<th class="TitleHeader">Edit</th>
					<th class="TitleHeader">Delete</th>
				</tr>
			<?php 
				
				require 'assets/dbpath.php';
				$query = "SELECT * FROM categories";
				$query_run = mysqli_query($connection, $query);
				$check_books = mysqli_num_rows($query_run) > 0;
				if($check_books)
				{
					while($row = mysqli_fetch_array($query_run))
					{
					?>
						<tr class="dataRow">
							<td class="dataCell"><?php echo $row['categoryID'];?></td>
							<td class="dataCell"><?php echo $row['category'];?></td>
							<td class="dataCell"><img width="80px" src="../categories/images/<?php echo $row['image'];?>"></td>
							<td class="dataCell">
								<form action="categoryUpdate.php" method="post">
									<input type="hidden" name="editCategory_ID" value="<?php echo $row['categoryID'];?>">
									<button class="btnEdit" name="editCategory_btn">Edit</button>
								</form>
							</td>
							<td class="dataCell">
								<form action="assets/categoryDelete.php" method="post">
									<input type="hidden" name="deleteCategory_ID" value="<?php echo $row['categoryID'];?>">
									<button class="btnDelete" name="deleteCategory_btn">Delete</button>
								</form>
							</td>
						</tr>						
					<?php
					}
				}
				else
				{	
					$_SESSION['categoryStatus'] = "No Record Found";
				}
				?>
				
			</table>
		
		</div>

		<!------ Featured Sections --------->
		<div class="fSectionManager" id="sections">
			<h1 class="sectionTitle">Featured Sections</h1>
			<!----- Most Popular Section ------->	
			<div class="fSectionAdd">
				<h2 class="sectionSubTitle">Most Popular</h2>
				<div class="fSectionAddStatus">
						<?php
							if(isset($_SESSION['mpSectionSuccess'])&& $_SESSION['mpSectionSuccess']!="")
							{
								echo $_SESSION['mpSectionSuccess'];
								unset($_SESSION['mpSectionSuccess']);
							}
							if(isset($_SESSION['mpSectionStatus'])&& $_SESSION['mpSectionStatus']!="")
							{
								echo $_SESSION['mpSectionStatus'];
								unset($_SESSION['mpSectionStatus']);
							}
						?>
				</div>
			</div>
			<table class="fSectionDataTable">
				<tr class="TitleRow">
					<th class="TitleHeader">Slot #</th>
					<th class="TitleHeader">Book ID</th>
					<th class="TitleHeader">Update</th>
				</tr>
			<?php 
				
				require 'assets/dbpath.php';
				$query = "SELECT * FROM mostpopular";
				$query_run = mysqli_query($connection, $query);
				$check_mpopular = mysqli_num_rows($query_run) > 0;
				if($check_mpopular)
				{
					while($row = mysqli_fetch_array($query_run))
					{
					?>
						<tr class="dataRow">
							<td class="dataCell"><?php echo $row['slotID'];?></td>
							
							<td class="dataCell">
								<form name="mostPopular" method="post" action="assets/fSectionUpdate.php">
									<select name="mostPopularSelect" id="SelectOption">
										<?php
				
											$squery ="SELECT * FROM books";
											$squery_run = mysqli_query($connection, $squery);
											$check_books = mysqli_num_rows($squery_run)>0;
											if($check_books)
											{
												while($srow = mysqli_fetch_array($squery_run))
												{
												?>
													<option name="mostPopularOption" value="<?php echo $srow['bookID'];?>"><?php echo $srow['bookID'];?></option>
												<?php
												}
											}

										?>
									</select>
									
							</td>
							<td class="dataCell">
								<form action="fSectionUpdate.php" method="post">
									<input type="hidden" name="updateMPSection_ID" value="<?php echo $row['slotID'];?>">
									<button class="btnEdit" name="updateMPSection_btn">Update</button>
								</form>
							</td>
							
						</tr>						
					<?php
					}
				}
				else
				{	
					$_SESSION['mpSectionStatus'] = "No Record Found";
				}
				?>
				
			</table>
			
			
			<!----- Abditory Picks Section ------->	
			<div class="fSectionAdd">
				<h2 class="sectionSubTitle">Abditory Picks</h2>
				<div class="fSectionAddStatus">
						<?php
							if(isset($_SESSION['apSectionSuccess'])&& $_SESSION['apSectionSuccess']!="")
							{
								echo $_SESSION['apSectionSuccess'];
								unset($_SESSION['apSectionSuccess']);
							}
							if(isset($_SESSION['apSectionStatus'])&& $_SESSION['apSectionStatus']!="")
							{
								echo $_SESSION['apSectionStatus'];
								unset($_SESSION['apSectionStatus']);
							}
						?>
				</div>
			</div>
			<table class="fSectionDataTable">
				<tr class="TitleRow">
					<th class="TitleHeader">Slot #</th>
					<th class="TitleHeader">Book ID</th>
					<th class="TitleHeader">Update</th>
				</tr>
			<?php 
				
				require 'assets/dbpath.php';
				$query = "SELECT * FROM abditorypicks";
				$query_run = mysqli_query($connection, $query);
				$check_mpopular = mysqli_num_rows($query_run) > 0;
				if($check_mpopular)
				{
					while($row = mysqli_fetch_array($query_run))
					{
					?>
						<tr class="dataRow">
							<td class="dataCell"><?php echo $row['slotID'];?></td>
							
							<td class="dataCell">
								<form name="abditoryPicks" method="post" action="assets/fSectionUpdate.php">
									<select name="abditoryPicksSelect" id="SelectOption">
										<?php
				
											$squery ="SELECT * FROM books";
											$squery_run = mysqli_query($connection, $squery);
											$check_books = mysqli_num_rows($squery_run)>0;
											if($check_books)
											{
												while($srow = mysqli_fetch_array($squery_run))
												{
												?>
													<option name="abditoryPicksOption" value="<?php echo $srow['bookID'];?>"><?php echo $srow['bookID'];?></option>
												<?php
												}
											}

										?>
									</select>
									
							</td>
							<td class="dataCell">
								<form action="fSectionUpdate.php" method="post">
									<input type="hidden" name="updateAPSection_ID" value="<?php echo $row['slotID'];?>">
									<button class="btnEdit" name="updateAPSection_btn">Update</button>
								</form>
							</td>
							
						</tr>						
					<?php
					}
				}
				else
				{	
					$_SESSION['apSectionStatus'] = "No Record Found";
				}
				?>
				
			</table>
			
			
			<!----- Latest Section ------->	
			<div class="fSectionAdd">
				<h2 class="sectionSubTitle">Latest</h2>
				<div class="fSectionAddStatus">
						<?php
							if(isset($_SESSION['latestSectionSuccess'])&& $_SESSION['latestSectionSuccess']!="")
							{
								echo $_SESSION['latestSectionSuccess'];
								unset($_SESSION['latestSectionSuccess']);
							}
							if(isset($_SESSION['latestSectionStatus'])&& $_SESSION['latestSectionStatus']!="")
							{
								echo $_SESSION['latestSectionStatus'];
								unset($_SESSION['latestSectionStatus']);
							}
						?>
				</div>
			</div>
			<table class="fSectionDataTable">
				<tr class="TitleRow">
					<th class="TitleHeader">Slot #</th>
					<th class="TitleHeader">Book ID</th>
					<th class="TitleHeader">Update</th>
				</tr>
			<?php 
				
				require 'assets/dbpath.php';
				$query = "SELECT * FROM latest";
				$query_run = mysqli_query($connection, $query);
				$check_mpopular = mysqli_num_rows($query_run) > 0;
				if($check_mpopular)
				{
					while($row = mysqli_fetch_array($query_run))
					{
					?>
						<tr class="dataRow">
							<td class="dataCell"><?php echo $row['slotID'];?></td>
							
							<td class="dataCell">
								<form name="Latest" method="post" action="assets/fSectionUpdate.php">
									<select name="latestSelect" id="SelectOption">
										<?php
				
											$squery ="SELECT * FROM books";
											$squery_run = mysqli_query($connection, $squery);
											$check_books = mysqli_num_rows($squery_run)>0;
											if($check_books)
											{
												while($srow = mysqli_fetch_array($squery_run))
												{
												?>
													<option name="latestOption" value="<?php echo $srow['bookID'];?>"><?php echo $srow['bookID'];?></option>
												<?php
												}
											}

										?>
									</select>
									
							</td>
							<td class="dataCell">
								<form action="fSectionUpdate.php" method="post">
									<input type="hidden" name="updateLatestSection_ID" value="<?php echo $row['slotID'];?>">
									<button class="btnEdit" name="updateLatestSection_btn">Update</button>
								</form>
							</td>
							
						</tr>						
					<?php
					}
				}
				else
				{	
					$_SESSION['latestSectionStatus'] = "No Record Found";
				}
				?>
				
			</table>
			
			
			<!----- Book of The Day Section ------->	
			<div class="fSectionAdd">
				<h2 class="sectionSubTitle">Book of The Day</h2>
				<div class="fSectionAddStatus">
						<?php
							if(isset($_SESSION['botdSectionSuccess'])&& $_SESSION['botdSectionSuccess']!="")
							{
								echo $_SESSION['botdSectionSuccess'];
								unset($_SESSION['botdSectionSuccess']);
							}
							if(isset($_SESSION['botdSectionStatus'])&& $_SESSION['botdSectionStatus']!="")
							{
								echo $_SESSION['botdSectionStatus'];
								unset($_SESSION['botdSectionStatus']);
							}
						?>
				</div>
			</div>
			<table class="fSectionDataTable">
				<tr class="TitleRow">
					<th class="TitleHeader">Slot #</th>
					<th class="TitleHeader">Book ID</th>
					<th class="TitleHeader">Update</th>
				</tr>
			<?php 
				
				require 'assets/dbpath.php';
				$query = "SELECT * FROM bookoftheday";
				$query_run = mysqli_query($connection, $query);
				$check_mpopular = mysqli_num_rows($query_run) > 0;
				if($check_mpopular)
				{
					while($row = mysqli_fetch_array($query_run))
					{
					?>
						<tr class="dataRow">
							<td class="dataCell"><?php echo $row['slotID'];?></td>
							
							<td class="dataCell">
								<form name="bookOfTheDay" method="post" action="assets/fSectionUpdate.php">
									<select name="botdSelect" id="SelectOption">
										<?php
				
											$squery ="SELECT * FROM books";
											$squery_run = mysqli_query($connection, $squery);
											$check_books = mysqli_num_rows($squery_run)>0;
											if($check_books)
											{
												while($srow = mysqli_fetch_array($squery_run))
												{
												?>
													<option name="botdOption" value="<?php echo $srow['bookID'];?>"><?php echo $srow['bookID'];?></option>
												<?php
												}
											}

										?>
									</select>
									
							</td>
							<td class="dataCell">
								<form action="fSectionUpdate.php" method="post">
									<input type="hidden" name="updatebotdSection_ID" value="<?php echo $row['slotID'];?>">
									<button class="btnEdit" name="updatebotdSection_btn">Update</button>
								</form>
							</td>
							
						</tr>						
					<?php
					}
				}
				else
				{	
					$_SESSION['botdSectionStatus'] = "No Record Found";
				}
				?>
				
			</table>
		
		</div>


<?php include 'assets/globalFooter.php';?>