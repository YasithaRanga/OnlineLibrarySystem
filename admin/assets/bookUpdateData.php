<?php
	include 'adminSecurity.php';
	require 'dbpath.php';
	

	if(isset($_POST['bookUpdateCancel_btn']))
	{
		$_SESSION['bookStatus'] = "Book Update Cancelled";
		header('Location: ../dashboard.php#books');
	}

	if(isset($_POST['bookUpdate_btn']))
	{
		$id = $_POST['editBook_ID'];
		$bName = $_POST['bookUpdateName'];
		$bCategory = $_POST['bookUpdateCategorySelect'];
		$bcImage = $_FILES['bookUpdateCoverImage']['name'];
		$bDownLink = $_POST['bookUpdateDownloadLink'];
		$bReadLink = $_POST['bookUpdateReadLink'];
			
		$validate_img_extension = $_FILES['bookUpdateCoverImage']['type']=="image/jpg"||
							$_FILES['bookUpdateCoverImage']['type']=="image/png"||
							$_FILES['bookUpdateCoverImage']['type']=="image/jpeg"||
							$_FILES['bookUpdateCoverImage']['type']=="";
	
		if($validate_img_extension)
		{
			$image_query = "SELECT * FROM books WHERE bookID='$id'";
			$image_query_run = mysqli_query($connection, $image_query);
			foreach($image_query_run as $image_row)
			{
				if($bcImage == NULL)
				{
					$image_data = $image_row['image'];
				}
				else
				{
					if($image_path ="../../resources/pdf/coverpage/".$image_row['image'])
					{
						unlink($image_path);
						$image_data = $bcImage;
					}
				}
			}
			
			$query = "UPDATE books SET bookName='$bName', category='$bCategory', image='$image_data', downloadLink='$bDownLink', readLink='$bReadLink' WHERE bookID='$id'";
			$query_run = mysqli_query($connection, $query);
	
			if($query_run)
			{
				if($bcImage == NULL)
				{
					$_SESSION['bookSuccess'] = "Book Updated Successfully with Existing Cover Image";
					header('Location: ../dashboard.php#books');
				}
				else
				{
					move_uploaded_file($_FILES['bookUpdateCoverImage']['tmp_name'], "../../resources/pdf/coverpage/".$_FILES['bookUpdateCoverImage']['name']);
					$_SESSION['bookSuccess'] = "Book Updated Successfully";
					header('Location: ../dashboard.php#books');
				}

			}
			else
			{
				$_SESSION['bookStatus'] = "Book Not Updated";
				header('Location: ../dashboard.php#books');
			}
		
		}
		else
		{
			$_SESSION['bookStatus'] = "Only JPG, PNG and JPEG Images are allowed";	
			header('Location: ../dashboard.php#books');
		}
	
	}
?>