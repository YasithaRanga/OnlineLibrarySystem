<?php
	include 'assets/adminSecurity.php';
?>
	<div class="sidebarContainer">
		<div class="logoAndTitle">
			<div class="logoBlock">
				<img src = "../../Image/Logo.png">
			</div>
			<hr>
			<div class="title">
				<h2 id="mainTitle">Admin Dashboard</h2>
			</div>
		</div>
		<hr>
		<div class="menuLinks">
			<ul class="menuList">
				<li class="menuItem">
					<a href="../admin/dashboard.php#admins">Administrators</a>
				</li>
				<hr class="menuLine">
				<li class="menuItem">
					<a href="../admin/dashboard.php#books">Books</a>
				</li>
				<hr class="menuLine">
				<li class="menuItem">
					<a href="../admin/dashboard.php#categories">Categories</a>
				</li>
				<hr class="menuLine">
				<li class="menuItem">
					<a href="../admin/dashboard.php#sections">Featured Sections</a>
				</li>
			</ul>
		</div>
		<div class="logoutContainer">
			<form action="../admin/assets/adminLogout.php" name="formLogout" method="post">
				<button class="btnLogout" name="btn_logout">Logout</button>
			</form>
		</div>
	</div>
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
