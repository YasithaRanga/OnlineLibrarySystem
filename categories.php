<!doctype html>
<html>
<head>
<title>Abditory | Categories</title>

<!--- php call for globalHeader.html----->
<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; include($IPATH."globalHeader.php"); ?>
	
<div class="section" id="section2">
  		<h1 id="mainTitle">Most Popular</h1>
		<?php include($IPATH."MostPopular.php"); ?>
</div>

	
<!--- php call for globalFooter.html----->
<?php include($IPATH."globalFooter.html"); ?>

</html>
