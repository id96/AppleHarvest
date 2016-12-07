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
		<p id="gallery_title">PHOTO GALLERY!</p>
		<div id="slide">
			<div class="button_container">
				<button id="slide_previous" onclick="movePrevious()">Previous</button>
				<button id="slide_next" onclick="moveNext()">Next</button>

			</div>
			<img id="slide_display" src="images/IV-AppleFest001(PhotobyHannahMacLean).jpg" alt="bleh">
		</div>


		<!-- parition -->
		<hr>

		<footer>
      		<?php include 'includes/footer.php'; ?>
		</footer>
  </body>
</html>
