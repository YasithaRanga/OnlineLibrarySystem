<?php
	include 'adminSecurity.php';
	require 'dbpath.php';

	if(isset($_POST['deleteCategory_btn']))
	{
		$id = $_POST['deleteCategory_ID'];
		
		$image_query = "SELECT * FROM categories WHERE categoryID='$id'";
		$image_query_run = mysqli_query($connection, $image_query);
		
		$query = "DELETE FROM categories WHERE categoryID='$id'";
		$query_run = mysqli_query($connection,$query);
		
		
		if($query_run)
		{
			$_SESSION['categorySuccess'] = "Category Deleted Successfully";
			header('Location: ../dashboard.php#categories');
			foreach($image_query_run as $image_row)
			{
					$image_data = $image_row['image'];
					$image_path ="../../categories/images/".$image_row['image'];
					unlink($image_path);
			}
			
		}
		else
		{
			$_SESSION['categoryStatus'] = "Category Not Deleted";
			header('Location: ../dashboard.php#categories');
		}
	}
	

?>