<!doctype html>
<html>
<head>
<title>Home | Abditory</title>
	
	<!--- php call for globalHeader.html----->
	<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; include($IPATH."globalHeader.html"); ?>
	<!-- Page Content --->
<div class="content">
  <h1 id="mainTitle">Welcome, Abditory Picks for you</h1>
	<?php include($IPATH."abditoryPicks.php"); ?>		
	
	
  <h1 id="mainTitle">Most Popular</h1>
	<?php include($IPATH."MostPopular.php"); ?>	
</div>

<!--- php call for globalFooter.html----->
<?php include($IPATH."globalFooter.html"); ?>
	

</html>