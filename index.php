<!doctype html>
<html>
<head>
<title>Home | Abditory</title>
	
	<!--- php call for globalHeader.html----->
	<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; include($IPATH."globalHeader.php"); ?>
	<!-- Page Content --->
<div class="content">
	<div class="section" id="section1">
		<h1 id="mainTitle">Welcome, Abditory Picks for you</h1>
		<?php include($IPATH."abditoryPicks.php"); ?>		
	</div>	
	
	
	<div class="sectionBOD" id="bookOfTheDay">
		<?php
			require 'assets/Database/dbconfig.php';
			$query = "SELECT * FROM books WHERE bookID=10";
			$query_run = mysqli_query($connection,$query);
			$check_abditoryPicks = mysqli_num_rows($query_run)>0;
			$row = mysqli_fetch_assoc($query_run);
			if($check_abditoryPicks)
			{
				?>
		
					<div class="bookOfTheDayMain" id="leftSectionBOD">
						<h1 id="mainTitleBOD">Book of The Day</h1>
 						<img src="../resources/pdf/coverpage/<?php echo $row['image']; ?>">
					</div>
					<div class="bookOfTheDayMain" id="rightSectionBOD">
						<h1 id="BODTitle"><?php echo $row['bookName']; ?></h1>
						<div class="userButtonsBOD">
							<a href="<?php echo $row['downloadLink']; ?>" target="_blank"><button id="btnDownloadBOD">Download</button></a>
							<a href="<?php echo $row['readLink']; ?>" target="_blank"><button id="btnReadBOD">Read</button></a>
						</div>
					</div>
			<?php
			}
			?>
		
	</div>
		
		
	<div class="section" id="section2">
  		<h1 id="mainTitle">Most Popular</h1>
		<?php include($IPATH."MostPopular.php"); ?>
	</div>
	
	<div class="section" id="section3">
  		<h1 id="mainTitle">Latest</h1>
		<?php include($IPATH."latest.php"); ?>
	</div>
</div>

<!--- php call for globalFooter.html----->
<?php include($IPATH."globalFooter.html"); ?>
	

</html>