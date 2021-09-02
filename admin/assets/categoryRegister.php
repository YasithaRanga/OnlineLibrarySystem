<?php
include 'adminSecurity.php';
require 'dbpath.php';


if(isset($_POST['categorySubmit']))
{
	$cName = $_POST['categoryName'];
	$ccImage = $_FILES['categoryCoverImage']['name'];
	$cLink = $_POST['categoryLink'];
	
	$validate_img_extension = $_FILES['categoryCoverImage']['type']=="image/jpg"||
							$_FILES['categoryCoverImage']['type']=="image/png"||
							$_FILES['categoryCoverImage']['type']=="image/jpeg";
	
//	$img_type=array('image/jpg','image/png','image/jpeg');
//	$validate_img_extension = in_array($_FILES['categoryCoverImage']['type'], $img_type);

	if($validate_img_extension)
	{
		if(file_exists("../../categories/images/".$_FILES['categoryCoverImage']['name']))
		{
			$store = $_FILES['categoryCoverImage']['name'];
			$_SESSION['categoryStatus'] = "Image Already Exists. '.$store'";
			header('Location: ../dashboard.php#categories');
		}
		else
		{
			$query = "INSERT INTO categories (category,link,image) VALUES('$cName','$cLink','$ccImage')";
			$query_run = mysqli_query($connection, $query);

			if($query_run)
			{
				move_uploaded_file($_FILES['categoryCoverImage']['tmp_name'], "../../categories/images/".$_FILES['categoryCoverImage']['name']);
				$_SESSION['categorySuccess'] = "Category Added Successfully";
				header('Location: ../dashboard.php#categories');
			}
			else
			{	
				$_SESSION['categoryStatus'] = "Category Not Added";
				header('Location: ../dashboard.php#categories');
			}	
		}
	}
	else
	{
		$_SESSION['categoryStatus'] = "Only JPG, PNG and JPEG Images are allowed";	
		header('Location: ../dashboard.php#categories');
	}
	
	
}
if(isset($_POST['categoryCancel']))
{	
	$_SESSION['categoryStatus'] = "Category Adding Cancelled";
	header('Location: ../dashboard.php#categories');
}


?>