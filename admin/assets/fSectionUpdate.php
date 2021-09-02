<?php
	include 'adminSecurity.php';
	require 'dbpath.php';
	
/*Most Popular Section*/

	if(isset($_POST['updateMPSection_btn']))
	{
		$MPid = $_POST['updateMPSection_ID'];
		$mostPopularSelection = $_POST['mostPopularSelect'];
	
		
		$MPcopy_query = "UPDATE mostpopular SET bookName = (SELECT bookName FROM books WHERE books.bookID = '$mostPopularSelection'), category = (SELECT category FROM books WHERE books.bookID='$mostPopularSelection'), image = (SELECT image FROM books WHERE books.bookID='$mostPopularSelection'), downloadLink = (SELECT downloadLink FROM books WHERE books.bookID='$mostPopularSelection'), readLink = (SELECT readLink FROM books WHERE books.bookID='$mostPopularSelection') WHERE slotID='$MPid'";
	
		$MPcopy_query_run = mysqli_query($connection,$MPcopy_query);
		if($MPcopy_query_run)
		{
			$_SESSION['mpSectionSuccess'] = "Most Popular Section Updated Successfully";	
			header('Location: ../dashboard.php#sections');
		}
		else
		{
			$_SESSION['mpSectionStatus'] = "Most Popular Section not Updated";	
			header('Location: ../dashboard.php#sections');	
		}
	
	}

/*Abditory Picks Section*/

	if(isset($_POST['updateAPSection_btn']))
	{
		$APid = $_POST['updateAPSection_ID'];
		$abditoryPicksSelection = $_POST['abditoryPicksSelect'];
	
		
		$APcopy_query = "UPDATE abditorypicks SET bookName = (SELECT bookName FROM books WHERE books.bookID = '$abditoryPicksSelection'), category = (SELECT category FROM books WHERE books.bookID='$abditoryPicksSelection'), image = (SELECT image FROM books WHERE books.bookID='$abditoryPicksSelection'), downloadLink = (SELECT downloadLink FROM books WHERE books.bookID='$abditoryPicksSelection'), readLink = (SELECT readLink FROM books WHERE books.bookID='$abditoryPicksSelection') WHERE slotID='$APid'";
	
		$APcopy_query_run = mysqli_query($connection,$APcopy_query);
		if($APcopy_query_run)
		{
			$_SESSION['apSectionSuccess'] = "Abditory Picks Section Updated Successfully";	
			header('Location: ../dashboard.php#sections');
		}
		else
		{
			$_SESSION['apSectionStatus'] = "Abditory Picks Section not Updated";	
			header('Location: ../dashboard.php#sections');	
		}
	
	}


/*Latest Section*/

	if(isset($_POST['updateLatestSection_btn']))
	{
		$latestid = $_POST['updateLatestSection_ID'];
		$latestSelection = $_POST['latestSelect'];
	
		
		$latestcopy_query = "UPDATE latest SET bookName = (SELECT bookName FROM books WHERE books.bookID = '$latestSelection'), category = (SELECT category FROM books WHERE books.bookID='$latestSelection'), image = (SELECT image FROM books WHERE books.bookID='$latestSelection'), downloadLink = (SELECT downloadLink FROM books WHERE books.bookID='$latestSelection'), readLink = (SELECT readLink FROM books WHERE books.bookID='$latestSelection') WHERE slotID='$latestid'";
	
		$latestcopy_query_run = mysqli_query($connection,$latestcopy_query);
		if($latestcopy_query_run)
		{
			$_SESSION['latestSectionSuccess'] = "Latest Section Updated Successfully";	
			header('Location: ../dashboard.php#sections');
		}
		else
		{
			$_SESSION['latestSectionStatus'] = "Latest Section not Updated";	
			header('Location: ../dashboard.php#sections');	
		}
	
	}


/*Book of the Day Section*/

	if(isset($_POST['updatebotdSection_btn']))
	{
		$botdid = $_POST['updatebotdSection_ID'];
		$botdSelection = $_POST['botdSelect'];
	
		
		$botdcopy_query = "UPDATE bookoftheday SET bookName = (SELECT bookName FROM books WHERE books.bookID = '$botdSelection'), category = (SELECT category FROM books WHERE books.bookID='$botdSelection'), image = (SELECT image FROM books WHERE books.bookID='$botdSelection'), downloadLink = (SELECT downloadLink FROM books WHERE books.bookID='$botdSelection'), readLink = (SELECT readLink FROM books WHERE books.bookID='$botdSelection') WHERE slotID='$botdid'";
	
		$botdcopy_query_run = mysqli_query($connection,$botdcopy_query);
		if($botdcopy_query_run)
		{
			$_SESSION['botdSectionSuccess'] = "Book of The Day Section Updated Successfully";	
			header('Location: ../dashboard.php#sections');
		}
		else
		{
			$_SESSION['botdSectionStatus'] = "Book of The Day Section not Updated";	
			header('Location: ../dashboard.php#sections');	
		}
	
	}
?>