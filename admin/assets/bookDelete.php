<?php
	include 'adminSecurity.php';
	require 'dbpath.php';

	if(isset($_POST['deleteBook_btn']))
	{
		$id = $_POST['deleteBook_ID'];
		
		$image_query = "SELECT * FROM testbooks WHERE bookID='$id'";
		$image_query_run = mysqli_query($connection, $image_query);
		
		$query = "DELETE FROM testbooks WHERE bookID='$id'";
		$query_run = mysqli_query($connection,$query);
		
		
		if($query_run)
		{
			$_SESSION['bookSuccess'] = "Book Deleted Successfully";
			header('Location: ../dashboard.php#books');
			foreach($image_query_run as $image_row)
			{
					$image_data = $image_row['image'];
					$image_path ="../../resources/pdf/coverpage/".$image_row['image'];
					unlink($image_path);
			}
			
		}
		else
		{
			$_SESSION['bookStatus'] = "Book Not Deleted";
			header('Location: ../dashboard.php#books');
		}
	}
	

?>