<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Apple Harvest</title>
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
		<script src="js/main.js"></script>
	</head>

	<body>
		<?php include 'includes/nav_bar.php';?>

		<div id="slide_w3" onload="showDivs(1)">
			<div class="button_container">
				<button id="slide_previous" onclick="plusDivs(-1)">Previous</button>
				<button id="slide_next" onclick="plusDivs(+1)">Next</button>
			</div>
			<img class="mySlides" src="images/apples-1285236_1920.jpg">
			<img class="mySlides" src="images/hannah_applefest.jpg">
			<img class="mySlides" src="images/IV-AppleFest017 (Photo by Alex Anderson).jpg">	
		</div>


		<!-- parition -->
		<hr>

		<footer>
      		<?php include 'includes/footer.php'; ?>
		</footer>
  </body>
</html>
