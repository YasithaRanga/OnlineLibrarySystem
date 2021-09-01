<?php
include 'adminSecurity.php';

require 'dbpath.php';


if(isset($_POST['bookSubmit']))
{
	$bName = $_POST['bookName'];
	$bCategory = $_POST['bookCategorySelect'];
	$bcImage = $_FILES['bookCoverImage']['name'];
	$bDownLink = $_POST['bookDownloadLink'];
	$bReadLink = $_POST['bookReadLink'];
	
	$validate_img_extension = $_FILES['bookCoverImage']['type']=="image/jpg"||
							$_FILES['bookCoverImage']['type']=="image/png"||
							$_FILES['bookCoverImage']['type']=="image/jpeg";
	
//	$img_type=array('image/jpg','image/png','image/jpeg');
//	$validate_img_extension = in_array($_FILES['bookCoverImage']['type'], $img_type);

	if($validate_img_extension)
	{
		if(file_exists("../../resources/pdf/coverpage/".$_FILES['bookCoverImage']['name']))
		{
			$store = $_FILES['bookCoverImage']['name'];
			$_SESSION['bookStatus'] = "Image Already Exists. '.$store'";
			header('Location: ../dashboard.php#books');
		}
		else
		{
			$query = "INSERT INTO books (bookName,category,image,downloadLink,readLink) VALUES('$bName','$bCategory','$bcImage','$bDownLink','$bReadLink')";
			$query_run = mysqli_query($connection, $query);

			if($query_run)
			{
				move_uploaded_file($_FILES['bookCoverImage']['tmp_name'], "../../resources/pdf/coverpage/".$_FILES['bookCoverImage']['name']);
				$_SESSION['bookSuccess'] = "Book Added Successfully";
				header('Location: ../dashboard.php#books');
			}
			else
			{	
				$_SESSION['bookStatus'] = "Book Not Added";
				header('Location: ../dashboard.php#books');
			}	
		}
	}
	else
	{
		$_SESSION['bookStatus'] = "Only JPG, PNG and JPEG Images are allowed";	
		header('Location: ../dashboard.php#books');
	}
	
	
}
if(isset($_POST['bookCancel']))
{	
	$_SESSION['bookStatus'] = "Book Adding Cancelled";
	header('Location: ../dashboard.php#books');
}


?>