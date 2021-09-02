<?php 
	include 'assets/globalHeader.php';
?>
<script>
			function validateCategoryUpdate()
			{
				if((document.categoryUpdateForm.categoryUpdateName.value=="")||(document.categoryUpdateForm.categoryUpdateLink.value==""))
				{
					window.alert("Fields are empty");
					return(false);
				}
			}
			
		</script>
		<div class="categoryUpdateContainer" id="categoryUpdateContainer">
			<h2 class="categoryUpdateFormTitle">Edit Category</h2>
				<?php
				require 'assets/dbpath.php';
				
				if(isset($_POST['editCategory_btn']))
				{
					$id = $_POST['editCategory_ID'];

					$query = "SELECT * FROM categories WHERE categoryID='$id'";
					$query_run = mysqli_query($connection, $query);

					foreach($query_run as $row)
					{
					?>
					<form class="categoryUpdateForm" name="categoryUpdateForm" action="assets/categoryUpdateData.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="editCategory_ID" value="<?php echo $row['categoryID'];?>">
						<h2 id="categoryUpdateTitle">Category Name</h2>
						<input id="categoryUpdateInput" type="text" name="categoryUpdateName" placeholder="Category Name" value="<?php echo $row['category'];?>">
						<h2 id="categoryUpdateTitle">Category Image</h2>
						<input id="categoryUpdateInput" type="file" name="categoryUpdateCoverImage" placeholder="Cover Image">
						<h2 id="categoryUpdateTitle">Page Link</h2>
						<input id="categoryUpdateInput" type="text" name="categoryUpdateLink" placeholder="Category Page Link" value="<?php echo $row['link'];?>">
						<br><br><br>
						<input type="submit" id="btnCategoryUpdate" name="categoryUpdate_btn" value="Update" onClick="return validateCategoryUpdate()">
						<button id="categoryUpdateCancel" name="categoryUpdateCancel_btn">Cancel</button>						
					</form>
					<?php
					}
				}


			?>	
		</div>
		



<?php include 'assets/globalFooter.php';?>