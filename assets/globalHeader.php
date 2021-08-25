	<!---- Favicon ----->
	<link rel="shortcut icon" type="image/jpg" href="../Image/favicon.png">

	<!--- Content ------------>
	<link rel="stylesheet" type="text/css" href="../CSS/content.css">

	<!-- Global Header stylesheets -->
	<link rel="stylesheet" type="text/css" href="../CSS/globalHeader.css">
	<!-------------- ---------------------->
	
	<!--- Zoom Sliders ---->
	<link rel ="stylesheet" type="text/css" href="../CSS/latest.css">
	<link rel ="stylesheet" type="text/css" href="../CSS/MostPopular.css">
	<link rel ="stylesheet" type="text/css" href="../CSS/abditoryPicks.css">	
	
	<!-- Global back to top button stylesheet -->
	<link rel="stylesheet" type="text/css" href="../CSS/globalBackToTopButton.css">
	<!-------------- ---------------------->

	<meta content="width=device-width, initial-scale=1" name="viewport" />
	
	<!--- CSS for Footer -->
	<link rel="stylesheet" type="text/css" href="../CSS/globalFooter.css">

	<script>
	function searchValidate()
	{
		if(document.seachBoxForm.searchTerm.value=="")
		{
			window.alert("Search Field is empty!");
			return(false);
		}
	}
	
	</script>
</head>
<body>

<!-- Back to top Button --->
	<a href="#pageTop" id="backToTopBtn">
		<i class="upSymbol">^</i>
	</a>
	
	<!-- Global Header --->
<header class="globalHeader" id="pageTop">
		<div class="headerContainer">
			<!-- Logo -->
			<div class="headerLogo">
				<a href="../index.php">
					<img src="../Image/Logo.png">
				</a>
			</div>
			<!-- Global Navigation bar -->
			<div class="globalNav">
				<ul class="navList" id="navList">
					<li class="listItem"> 
						<a href="../index.php">Home</a>
					</li>
					<li class="listItem">
						<a href="../categories.php">Categories</a>
		 	 		</li>
					<li class="listItem">
						<a href="../contact.php">Contact Us</a>
					</li>
				</ul>
				<div class="globalMenu" id="toggleBtn">
					<div class="menuLine"></div>
					<div class="menuLine"></div>
					<div class="menuLine"></div>
				</div>
			</div>
			<div class="navSearch">
				<form name="seachBoxForm" id="searchBoxForm" method="post" action="../search.php">
					<table id="searchTable">
						<tr>
							<td>
								<button type="submit" id="searchBtn" onClick="return searchValidate()"><img src="../Image/searchIcon.png"></button>
							</td>
							<td>
								<input id="searchBox" name="searchTerm" type="search" placeholder="Search">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>		
	</header>