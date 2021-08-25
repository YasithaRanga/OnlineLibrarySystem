<!doctype html>
<html>
<head>
<title>Abditory | Search</title>
	
	<!--- php call for globalHeader.html----->
	<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; include($IPATH."globalHeader.php"); ?>
	<?php
		$term = $_REQUEST["searchTerm"];
	?>
	
	<!-- Page Content --->
<div class="content">
	<div class="section" id="noResultSection">
		<h1 id="mainTitle">Search results for, <?php echo $term; ?></h1>
		<div class="categoryContainer">
			<?php
				require 'assets/Database/dbconfig.php';
				
				$query = "SELECT * FROM books WHERE bookName LIKE '%{$term}%' OR category LIKE '%{$term}%'";
				$query_run = mysqli_query($connection, $query);
				$check_category = mysqli_num_rows($query_run) > 0;		
				if($check_category)
				{
					while($row = mysqli_fetch_array($query_run))
					{
					?>
					
						<div class="categorySection">
							<div class="categoryImage">
								<img src="../resources/pdf/coverpage/<?php echo $row['image']; ?>" width="85%" height="100%">
							</div>
							<div class="categoryName">
								<h2><?php echo $row['bookName'] ?></h2>
							</div>
							<div class="categoryButton">
								<a href="<?php echo $row['downloadLink'] ?>" target="_blank">
									<button class="categoryLink">Download</button>
								</a>
								<a href="<?php echo $row['readLink'] ?>" target="_blank">
									<button class="categoryLink">Read</button>
								</a>
							</div>
						</div>
					<?php
					}
				}
				
	
				else
				{
					?>
					<h2 id='searchError'>No Search Results Found!</h2>
					<?php
				}
		
			?>
			
		</div>

		
		
	</div>	
</div>

<!--- php call for globalFooter.html----->
<?php include($IPATH."globalFooter.html"); ?>
	
</html>
	