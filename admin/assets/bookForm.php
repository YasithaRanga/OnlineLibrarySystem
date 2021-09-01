<?php
	include 'bookSecurity.php';
	session_start();
?>
<script>
		function popUpBook()
		{
			var popup = document.getElementById("bookFormContainer");
			popup.classList.toggle("show");
		}
		function validateBook()
		{
			if((document.bookAddForm.bookName.value=="")||(document.bookAddForm.bookCoverImage.value=="")||(document.bookAddForm.bookDownloadLink.value=="")||(document.bookAddForm.bookReadLink.value==""))
				{
					window.alert("Fields are empty");
					return(false);
				}
		}
		
</script>
<div class="bookFormContainer" id="bookFormContainer">
	<h2 class="bookFormTitle">Add a Book</h2>
	<form class="bookAddForm" name="bookAddForm" action="assets/bookRegister.php" method="post" enctype="multipart/form-data">
		<h2 id="bookAddTitle">Book Name</h2>
		<input id="bookInput" type="text" name="bookName" placeholder="Book Name" >
		<h2 id="bookAddTitle">Category</h2>
		<select id="bookCategorySelect" name="bookCategorySelect" >
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
						<option name="bookCategoryOption" value="<?php echo $row['category'];?>"><?php echo $row['category'];?></option>
					<?php
					}
				}
			?>
		</select>
		<h2 id="bookAddTitle">Cover Image</h2>
		<input id="bookInput" type="file" name="bookCoverImage" placeholder="Cover Image">
		<h2 id="bookAddTitle">Download Link</h2>
		<input id="bookInput" type="text" name="bookDownloadLink" placeholder="Download Link">
		<h2 id="bookAddTitle">Read Link</h2>
		<input id="bookInput" type="text" name="bookReadLink" placeholder="Read Link">
		<br><br>
		<input type="submit" id="btnBookSubmit" name="bookSubmit" onClick="return validateBook()">
		<button id="bookCancel" name="bookCancel" onClick="popUpBook()">Cancel</button>
	</form>
</div>
	