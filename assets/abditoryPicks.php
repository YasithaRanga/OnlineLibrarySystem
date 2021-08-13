

<div class="slide-container">
		<span class="slider-span" id="slider-span1"></span>
		<span class="slider-span" id="slider-span2"></span>
		<span class="slider-span" id="slider-span3"></span>
		<span class="slider-span" id="slider-span4"></span>
		<span class="slider-span" id="slider-span5"></span>
		<span class="slider-span" id="slider-span6"></span>
		<span class="slider-span" id="slider-span7"></span>
	
		
		<div class="image-slider">
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
					<div class="slides-div" id="slide-1">
						<img src="../resources/pdf/coverpage/<?php echo $row['image']; ?>" alt="" class="img" id="img1">
						<a href="#slider-span1" class="button" id="button-1"></a> 
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
				<div class="slides-div" id="slide-2">
					<img src="../resources/pdf/coverpage/<?php echo $row['image']; ?>" alt="" class="img" id="img2">
					<a href="#slider-span2" class="button" id="button-2"></a>
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
			
			<div id="sliderContainer">
				<div class="slides-div" id="slide-3">
					<img src="../Image/ZoomSlider/img3.jpg" alt="" class="img" id="img3">
					<a href="#slider-span3" class="button" id="button-3"></a>
				</div>
				<div class="userButtons">
					<button id="btnDownload">Download</button>
					<button id="btnRead">Read</button>
				</div>
			</div>
			
			<div id="sliderContainer">
				<div class="slides-div" id="slide-4">
					<img src="../Image/ZoomSlider/img4.jpg" alt="" class="img" id="img4">
					<a href="#slider-span4" class="button" id="button-4"></a>
				</div>
				<div class="userButtons">
					<button id="btnDownload">Download</button>
					<button id="btnRead">Read</button>
				</div>
			</div>
				
			<div id="sliderContainer">
				<div class="slides-div" id="slide-5">
					<img src="../Image/ZoomSlider/img5.jpg" alt="" class="img" id="img5">
					<a href="#slider-span5" class="button" id="button-5"></a>
				</div>
				<div class="userButtons">
					<button id="btnDownload">Download</button>
					<button id="btnRead">Read</button>
				</div>
			</div>
			
			<div id="sliderContainer">
				<div class="slides-div" id="slide-6">
					<img src="../Image/ZoomSlider/img6.jpg" alt="" class="img" id="img6">
					<a href="#slider-span6" class="button" id="button-6"></a>
				</div>
				<div class="userButtons">
					<button id="btnDownload">Download</button>
					<button id="btnRead">Read</button>
				</div>
			</div>
				
			<div id="sliderContainer">
				<div class="slides-div" id="slide-7">
					<img src="../Image/ZoomSlider/img7.jpg" alt="" class="img" id="img7">
					<a href="#slider-span7" class="button" id="button-7"></a>
				</div>
				<div class="userButtons">
					<button id="btnDownload">Download</button>
					<button id="btnRead">Read</button>
				</div>
			</div>
		</div>
	</div>
<link rel ="stylesheet" type="text/css" href="../CSS/zoomSlider.css">
