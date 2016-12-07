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
				<button id="slide_previous" onclick="movePrevious()"></button>
				<button id="slide_next" onclick="moveNext()"></button>
			</div>
			<img class="slide_display" src="IV-AppleFest001 (Photo by Hannah MacLean).jpg">
		</div>


		<!-- parition -->
		<hr>

		<footer>
      		<?php include 'includes/footer.php'; ?>
		</footer>
  </body>
</html>
