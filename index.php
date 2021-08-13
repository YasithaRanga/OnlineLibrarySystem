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
	
	<div class="section" id="section2">
  		<h1 id="mainTitle">Most Popular</h1>
		<?php include($IPATH."MostPopular.php"); ?>
	</div>
</div>

<!--- php call for globalFooter.html----->
<?php include($IPATH."globalFooter.html"); ?>
	

</html>