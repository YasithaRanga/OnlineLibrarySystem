

<div class="slide-container">
		<span class="slider-span" id="slider-span8"></span>
		<span class="slider-span" id="slider-span9"></span>
		<span class="slider-span" id="slider-span10"></span>
		<span class="slider-span" id="slider-span11"></span>
		<span class="slider-span" id="slider-span12"></span>
		<span class="slider-span" id="slider-span13"></span>
		<span class="slider-span" id="slider-span14"></span>
	
		
		<div class="image-slider">
			<?php
			require 'database/dbconfig.php';
			$query = "SELECT * FROM books WHERE bookID=5";
			$query_run = mysqli_query($connection,$query);
			$check_abditoryPicks = mysqli_num_rows($query_run)>0;
			$row = mysqli_fetch_assoc($query_run);
			if($check_abditoryPicks)
			{
				?>
				<div id="sliderContainer">
					<div class="slides-div" id="slide-1">
						<img src="../resources/pdf/coverpage/<?php echo $row['image']; ?>" alt="" class="img" id="img1">
						<a href="#slider-span8" class="button" id="button-1"></a> 
					</div>
					<div class="bookTitleContainer">
						<h4 id="bookTitle"><?php echo $row['bookName']; ?></h4>
					</div>
					<div class="userButtons">
						<a href="<?php echo $row['downloadLink']; ?>" target="_blank"><button id="btnDownload">Download</button></a>
						<a href="<?php echo $row['readLink']; ?>" target="_blank"><button id="btnRead">Read</button></a>
					</div>
				</div>
				<?php
			}
			?>
			
				
			<?php
			require 'database/dbconfig.php';
			$query = "SELECT * FROM books WHERE bookID=7";
			$query_run = mysqli_query($connection,$query);
			$check_abditoryPicks = mysqli_num_rows($query_run)>0;
			$row = mysqli_fetch_assoc($query_run);
			if($check_abditoryPicks)
			{
				?>
			<div id="sliderContainer">
				<div class="slides-div" id="slide-2">
					<img src="../resources/pdf/coverpage/<?php echo $row['image']; ?>" alt="" class="img" id="img2">
					<a href="#slider-span9" class="button" id="button-2"></a>
				</div>
				<div class="bookTitleContainer">
						<h4 id="bookTitle"><?php echo $row['bookName']; ?></h4>
				</div>
				<div class="userButtons">
					<a href="<?php echo $row['downloadLink']; ?>" target="_blank"><button id="btnDownload">Download</button></a>
					<a href="<?php echo $row['readLink']; ?>" target="_blank"><button id="btnRead">Read</button></a>
				</div>
			</div>
				<?php
			}
			?>
			
			<?php
			require 'database/dbconfig.php';
			$query = "SELECT * FROM books WHERE bookID=3";
			$query_run = mysqli_query($connection,$query);
			$check_abditoryPicks = mysqli_num_rows($query_run)>0;
			$row = mysqli_fetch_assoc($query_run);
			if($check_abditoryPicks)
			{
				?>
			<div id="sliderContainer">
				<div class="slides-div" id="slide-3">
					<img src="../resources/pdf/coverpage/<?php echo $row['image']; ?>" alt="" class="img" id="img3">
					<a href="#slider-span10" class="button" id="button-3"></a>
				</div>
				<div class="bookTitleContainer">
						<h4 id="bookTitle"><?php echo $row['bookName']; ?></h4>
				</div>
				<div class="userButtons">
					<a href="<?php echo $row['downloadLink']; ?>" target="_blank"><button id="btnDownload">Download</button></a>
					<a href="<?php echo $row['readLink']; ?>" target="_blank"><button id="btnRead">Read</button></a>
				</div>
			</div>
				<?php
			}
			?>
			
			<?php
			require 'database/dbconfig.php';
			$query = "SELECT * FROM books WHERE bookID=6";
			$query_run = mysqli_query($connection,$query);
			$check_abditoryPicks = mysqli_num_rows($query_run)>0;
			$row = mysqli_fetch_assoc($query_run);
			if($check_abditoryPicks)
			{
				?>
			<div id="sliderContainer">
				<div class="slides-div" id="slide-4">
					<img src="../resources/pdf/coverpage/<?php echo $row['image']; ?>" alt="" class="img" id="img4">
					<a href="#slider-span11" class="button" id="button-4"></a>
				</div>
				<div class="bookTitleContainer">
						<h4 id="bookTitle"><?php echo $row['bookName']; ?></h4>
				</div>
				<div class="userButtons">
					<a href="<?php echo $row['downloadLink']; ?>" target="_blank"><button id="btnDownload">Download</button></a>
					<a href="<?php echo $row['readLink']; ?>" target="_blank"><button id="btnRead">Read</button></a>
				</div>
			</div>
				<?php
			}
			?>
			
			<?php
			require 'database/dbconfig.php';
			$query = "SELECT * FROM books WHERE bookID=4";
			$query_run = mysqli_query($connection,$query);
			$check_abditoryPicks = mysqli_num_rows($query_run)>0;
			$row = mysqli_fetch_assoc($query_run);
			if($check_abditoryPicks)
			{
				?>
			<div id="sliderContainer">
				<div class="slides-div" id="slide-5">
					<img src="../resources/pdf/coverpage/<?php echo $row['image']; ?>" alt="" class="img" id="img5">
					<a href="#slider-span12" class="button" id="button-5"></a>
				</div>
				<div class="bookTitleContainer">
						<h4 id="bookTitle"><?php echo $row['bookName']; ?></h4>
				</div>
				<div class="userButtons">
					<a href="<?php echo $row['downloadLink']; ?>" target="_blank"><button id="btnDownload">Download</button></a>
					<a href="<?php echo $row['readLink']; ?>" target="_blank"><button id="btnRead">Read</button></a>
				</div>
			</div>
				<?php
			}
			?>
			
			<?php
			require 'database/dbconfig.php';
			$query = "SELECT * FROM books WHERE bookID=2";
			$query_run = mysqli_query($connection,$query);
			$check_abditoryPicks = mysqli_num_rows($query_run)>0;
			$row = mysqli_fetch_assoc($query_run);
			if($check_abditoryPicks)
			{
				?>
			<div id="sliderContainer">
				<div class="slides-div" id="slide-6">
					<img src="../resources/pdf/coverpage/<?php echo $row['image']; ?>" alt="" class="img" id="img6">
					<a href="#slider-span13" class="button" id="button-6"></a>
				</div>
				<div class="bookTitleContainer">
						<h4 id="bookTitle"><?php echo $row['bookName']; ?></h4>
				</div>
				<div class="userButtons">
					<a href="<?php echo $row['downloadLink']; ?>" target="_blank"><button id="btnDownload">Download</button></a>
					<a href="<?php echo $row['readLink']; ?>" target="_blank"><button id="btnRead">Read</button></a>
				</div>
			</div>
				<?php
			}
			?>
			
			<?php
			require 'database/dbconfig.php';
			$query = "SELECT * FROM books WHERE bookID=1";
			$query_run = mysqli_query($connection,$query);
			$check_abditoryPicks = mysqli_num_rows($query_run)>0;
			$row = mysqli_fetch_assoc($query_run);
			if($check_abditoryPicks)
			{
				?>
			<div id="sliderContainer">
				<div class="slides-div" id="slide-7">
					<img src="../resources/pdf/coverpage/<?php echo $row['image']; ?>" alt="" class="img" id="img7">
					<a href="#slider-span14" class="button" id="button-7"></a>
				</div>
				<div class="bookTitleContainer">
						<h4 id="bookTitle"><?php echo $row['bookName']; ?></h4>
				</div>
				<div class="userButtons">
					<a href="<?php echo $row['downloadLink']; ?>" target="_blank"><button id="btnDownload">Download</button></a>
					<a href="<?php echo $row['readLink']; ?>" target="_blank"><button id="btnRead">Read</button></a>
				</div>
			</div>
				<?php
			}
			?>
		</div>
	</div>

