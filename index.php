<!doctype html>
<html>
<head>
<title>Home | Abditory</title>
	<!-- this page stylesheet --
	<link rel="stylesheet" type="text/css" href="">
	>
	<!-------------- ---------------------->
	
	
	<!--- php call for globalHeader.html----->
	<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; include($IPATH."globalHeader.html"); ?>
	<!-- Page Content --->
<div class="content">
  <h1>Welcome, Abditory Picks for you</h1>
	<?php include($IPATH."abditoryPicks.html"); ?>		
	
</div>

<!--- php call for globalFooter.html----->
<?php include($IPATH."globalFooter.html"); ?>
	

</html>