<!doctype html>
<html>
<head>
<title>Home | Abditory</title>
	
	<!--- php call for globalHeader.html----->
	<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; include($IPATH."globalHeader.php"); ?>
	<!-- Page Content --->
<div class="content">
	<div class="section" id="thankYouSection">
		<h1 id="mainTitle">Thank you, Your Message sent Successfully.</h1>
		<a href="../index.php"><button id="returnHome">Return to Home</button></a>
	</div>
</div>

<!--- php call for globalFooter.html----->
<?php include($IPATH."globalFooter.html"); ?>
	

</html>