<?php
	include 'bookSecurity.php';
?>
<script>
		function popUpCategory()
		{
			var popup = document.getElementById("categoryFormContainer");
			popup.classList.toggle("show");
		}
		function validateCategory()
		{
			if((document.categoryAddForm.categoryName.value=="")||(document.categoryAddForm.categoryCoverImage.value=="")||(document.categoryAddForm.categoryLink.value==""))
				{
					window.alert("Fields are empty");
					return(false);
				}
		}
		
</script>
<div class="categoryFormContainer" id="categoryFormContainer">
	<h2 class="categoryFormTitle">Add a Category</h2>
	<form class="categoryAddForm" name="categoryAddForm" action="assets/categoryRegister.php" method="post" enctype="multipart/form-data">
		<h2 id="categoryAddTitle">Category Name</h2>
		<input id="categoryInput" type="text" name="categoryName" placeholder="Category Name" >
		<h2 id="categoryAddTitle">Category Image</h2>
		<input id="categoryInput" type="file" name="categoryCoverImage" placeholder="Category Cover Image">
		<h2 id="categoryAddTitle">Page Link</h2>
		<input id="categoryInput" type="text" name="categoryLink" placeholder="Page Link">
		<br><br>
		<input type="submit" id="btnCategorySubmit" name="categorySubmit" onClick="return validateCategory()">
		<button id="categoryCancel" name="categoryCancel" onClick="popUpCategory()">Cancel</button>
	</form>
</div>
	