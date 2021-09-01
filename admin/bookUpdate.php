<?php 
	include 'assets/globalHeader.php';
?>
<script>
			function validateBookUpdate()
			{
				if((document.bookUpdateForm.bookUpdateName.value=="")||(document.bookUpdateForm.bookUpdateDownloadLink.value=="")||(document.bookUpdateForm.bookUpdateReadLink.value==""))
				{
					window.alert("Fields are empty");
					return(false);
				}
			}
			
		</script>
		<div class="bookUpdateContainer" id="bookUpdateContainer">
			<h2 class="bookUpdateFormTitle">Edit Book</h2>
				<?php
				require 'assets/dbpath.php';
				
				if(isset($_POST['editBook_btn']))
				{
					$id = $_POST['editBook_ID'];

					$query = "SELECT * FROM books WHERE bookID='$id'";
					$query_run = mysqli_query($connection, $query);

					foreach($query_run as $row)
					{
					?>
					<form class="bookUpdateForm" name="bookUpdateForm" action="assets/bookUpdateData.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="editBook_ID" value="<?php echo $row['bookID'];?>">
						<h2 id="bookUpdateTitle">Book Name</h2>
						<input id="bookUpdateInput" type="text" name="bookUpdateName" placeholder="Book Name" value="<?php echo $row['bookName'];?>">
						<h2 id="bookUpdateTitle">Cover Image</h2>
						<input id="bookUpdateInput" type="file" name="bookUpdateCoverImage" placeholder="Cover Image">
						<h2 id="bookUpdateTitle">Download Link</h2>
						<input id="bookUpdateInput" type="text" name="bookUpdateDownloadLink" placeholder="Download Link" value="<?php echo $row['downloadLink'];?>">
						<h2 id="bookUpdateTitle">Read Link</h2>
						<input id="bookUpdateInput" type="text" name="bookUpdateReadLink" placeholder="Read Link" value="<?php echo $row['readLink'];?>">
						<h2 id="bookUpdateTitle">Category</h2>
						<select id="bookUpdateCategorySelect" name="bookUpdateCategorySelect">
							<?php
								require 'assets/dbpath.php';
								$query = "SELECT * FROM categories";
								$query_run = mysqli_query($connection, $query);
								$check_category = mysqli_num_rows($query_run) > 0;
								if($check_category)
								{
									while($row = mysqli_fetch_array($query_run))
									{
									?>
										<option name="bookUpdateCategoryOption" value="<?php echo $row['category'];?>"><?php echo $row['category'];?></option>
									<?php
									}
								}
							?>
						</select>
						
						<br><br><br>
						<input type="submit" id="btnBookUpdate" name="bookUpdate_btn" value="Update" onClick="return validateBookUpdate()">
						<button id="bookUpdateCancel" name="bookUpdateCancel_btn">Cancel</button>
						
					</form>
					<?php
					}
				}


			?>	
		</div>
		



<?php include 'assets/globalFooter.php';?>