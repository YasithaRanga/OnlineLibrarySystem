<!doctype html>
<html>
<head>
<title>Abditory | Contact  Us</title>
	
	<!--- php call for globalHeader.html----->
	<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; include($IPATH."globalHeader.php"); ?>
	<!-- Page Content --->
	
<div class="content">
	<div class="contactContainer">
		<div class="contactSection" id="contactSection1">
			<h1 id="mainTitle">Contact Us</h1>
			<h2 id="contactTitles">E-mail</h2>
				<h3 id="contactSubTitles"><a href="mailto:info@abditory.tk">info@abditory.tk</a></h3>
			<h2 id="contactTitles">Call</h2>
				<h3 id="contactSubTitles"><a href="tel:+94764502518">+94 76 450 2518</a></h3>
			<h2 id="contactTitles">SMS</h2>
				<h3 id="contactSubTitles"><a href="sms:+94764502518">+94 76 450 2518</a></h3>
		</div>	

		<div class="contactSection" id="contactSection2">
			<h1 id="mainTitle">Send us a Message</h1>
			<form name="contactForm" method="POST" action="contact/sending.php">
				<h3 id="contactTitles">First Name</h3>
				<input id="contactField" type="text" name="firstName" placeholder="John">
				<h3 id="contactTitles">Last Name</h3>
				<input id="contactField" type="text" name="lastName" placeholder="Doe">
				<h3 id="contactTitles">E-mail</h3>
				<input id="contactField" type="email" name="email" placeholder="example@example.com">
				<h3 id="contactTitles">Message</h3>
				<textarea id="contactFieldTA" name="message" placeholder="Your message goes here!" rows="10" cols="50"></textarea>
				<br><br><br>
				<input id="contactFieldBTN" name="submit" type="submit" value="Send">
			</form>
		</div>
	</div>
</div>

<!--- php call for globalFooter.html----->
<?php include($IPATH."globalFooter.html"); ?>
	

</html>