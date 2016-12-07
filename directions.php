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


		<div class="content">

			<p class="mapdescription">Vistors' Map</p>
			<div class="button_container">
				<button id="sendbutton" onclick="window.location.href='mailto:name@email.com'">Send the Map to your email</button>
			</div>
			<div id="directionimg">
			<img class="normal" src="images/overview.jpg" alt="overview">
			<img class="long" src="images/overview_long.jpg" alt="overview">
				<!-- Media Credit : Downtown Ithaca Website -->
			</div>

			<!-- parition -->
			<hr>

			<p class="mapdescription">Public Transportations: All the TCAT Bus Routes to the Commons</p>
			<p class="normal">Click individual Buttons to Check the Route Schedule: </p>

			 <span class="button_container">
			 	<button id="overviewblue" onclick="swapImg()">Overview</button>
			 	<button id="brown10" onclick="swapImg10()">Route10</button>
			 	<button id="red11" onclick="swapImg11()">Route11</button>
			 	<button id="yellow15" onclick="swapImg15()">Route15</button>
			 	<button id="green17" onclick="swapImg17()">Route17</button>
			 	<!-- Media Credit : TCAT Website -->
     		 </span> <!-- end of button_container div -->

			<div id="directionbus">
				<img id="enlarge" src="images/routemap.jpg" alt="routemap">
				<img class="long" src="images/routemap_long.jpg" alt="routemap">
				<!-- Media Credit : TCAT Website -->
			</div>
			<p>Route Schedules and Maps Taken From TCAT's <a href="http://https://www.tcatbus.com/ride/2015-ride-guide/" target="_blank">Ride Guide</a>!</p>

			<!-- parition -->
			<hr>

			<p class="mapdescription">Ithaca Commons on Google Map</p>
			<div id="googlemap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2944.443033500038!2d-76.49993280325015!3d42.439588879181684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d0819c8632d9e5%3A0x7e9b07ab2aa65eb6!2sIthaca+Commons!5e0!3m2!1sen!2sus!4v1480029466179" allowfullscreen></iframe>
				<!-- Media Credit : Google Map-->
			</div>


		</div>

		<!-- parition -->
		<hr>

		<footer>
      		<?php include 'includes/footer.php'; ?>
		</footer>
  </body>
</html>
