<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Apple Harvest</title>
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">
		<!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway"> -->
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<script src="js/main.js"></script>
	</head>

	<body>
		<?php include 'includes/nav_bar.php';?>

		<div id="slide_w3" onload="showDivs(1)">
			<img class="mySlides" src="images/apples-1285236_1920.jpg">
			<img class="mySlides" src="images/hannah_applefest.jpg">
			<img class="mySlides" src="images/IV-AppleFest017 (Photo by Alex Anderson).jpg">
			<a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
			<a class="w3-btn-floating w3-display-right" onclick="plusDivs(+1)">&#10095;</a>
		</div>


		<!-- parition -->
		<hr>

		<footer>
      		<?php include 'includes/footer.php'; ?>
		</footer>
  </body>
</html>
