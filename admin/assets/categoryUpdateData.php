<?php
	include 'adminSecurity.php';
	require 'dbpath.php';
	

	if(isset($_POST['categoryUpdateCancel_btn']))
	{
		$_SESSION['categoryStatus'] = "Category Update Cancelled";
		header('Location: ../dashboard.php#categories');
	}

	if(isset($_POST['categoryUpdate_btn']))
	{
		$id = $_POST['editCategory_ID'];
		$cName = $_POST['categoryUpdateName'];
		$ccImage = $_FILES['categoryUpdateCoverImage']['name'];
			
		$validate_img_extension = $_FILES['categoryUpdateCoverImage']['type']=="image/jpg"||
							$_FILES['categoryUpdateCoverImage']['type']=="image/png"||
							$_FILES['categoryUpdateCoverImage']['type']=="image/jpeg"||
							$_FILES['categoryUpdateCoverImage']['type']=="";
	
		if($validate_img_extension)
		{
			$image_query = "SELECT * FROM categories WHERE categoryID='$id'";
			$image_query_run = mysqli_query($connection, $image_query);
			foreach($image_query_run as $image_row)
			{
				if($ccImage == NULL)
				{
					$image_data = $image_row['image'];
				}
				else
				{
					if($image_path ="../../categories/images/".$image_row['image'])
					{
						unlink($image_path);
						$image_data = $ccImage;
					}
				}
			}
			
			$query = "UPDATE categories SET category='$cName', image='$image_data' WHERE categoryID='$id'";
			$query_run = mysqli_query($connection, $query);
	
			if($query_run)
			{
				if($ccImage == NULL)
				{
					$_SESSION['categorySuccess'] = "Category Updated Successfully with Existing Cover Image";
					header('Location: ../dashboard.php#categories');
				}
				else
				{
					move_uploaded_file($_FILES['categoryUpdateCoverImage']['tmp_name'], "../../categories/images/".$_FILES['categoryUpdateCoverImage']['name']);
					$_SESSION['categorySuccess'] = "Category Updated Successfully";
					header('Location: ../dashboard.php#categories');
				}

			}
			else
			{
				$_SESSION['categoryStatus'] = "Category Not Updated";
				header('Location: ../dashboard.php#categories');
			}
		
		}
		else
		{
			$_SESSION['categoryStatus'] = "Only JPG, PNG and JPEG Images are allowed";	
			header('Location: ../dashboard.php#categories');
		}
	
	}
?>