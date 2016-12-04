<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Apple Harvest</title>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
		<link href="http://addtocalendar.com/atc/1.5/atc-style-glow-orange.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<?php include 'includes/nav_bar.php';?>
		<div id="hero">
			<img src="images/apple-banner.jpg" alt="Banner">
			<!-- Media Credit : Couleur pixabay -->
		</div>

		<div id="event_container">
				<ul>
					<li>
					<div class="event_info">
						<div class="info">
							<h3>Sept 30: 12PM-6PM </h3>
							<h3>Oct 1-2: 10AM-6PM</h3>
						</div>
						<div class="icon">
							<img src="images/date_icon.png" alt="date">
							<!-- Media Credit : Carrie Huang -->
						</div>
					</div>
					</li>

					<li>
					<div class="event_info">
						<div class="info">
							<h3>Ithaca Commons</h3>
							<h4>171 E M.L.K. Jr. St Ithaca, NY </h4>
						</div>
						<div class="icon">
							<img src="images/location_icon.png" alt="location">
							<!-- Media Credit : Carrie Huang -->
						</div>
					</div>
					</li>

					<li>
					<div class="event_info">
						<div class="info">
							<h3>100+ Vendors</h3>
							<h4>Food, gifts, performances</h4>
						</div>
						<div class="icon">
							<img src="images/vendors_icon.png" alt="vendors">
							<!-- Media Credit : Carrie Huang, altered Michael Teitelbaum, Classic Chevy -->
						</div>
					</div>
					</li>
				</ul>
			</div>

		<div class="content">

			<div id="spacer"></div>
			<div id="description">
				<h1>Ithaca's premier event of the Fall, Apple Harvest Festival is a three day celebration of food, fun, and apples!</h1>
				<!--following codes adapted from 
			http://addtocalendar.com/#tab_widget_style-->
				<div id="calendar">
					<script type="text/javascript">(function () {
		            if (window.addtocalendar)if(typeof window.addtocalendar.start == "function")return;
		            if (window.ifaddtocalendar == undefined) { window.ifaddtocalendar = 1;
		                var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
		                s.type = 'text/javascript';s.charset = 'UTF-8';s.async = true;
		                s.src = ('https:' == window.location.protocol ? 'https' : 'http')+'://addtocalendar.com/atc/1.5/atc.min.js';
		                var h = d[g]('body')[0];h.appendChild(s); }})();
		   			</script>

				    <!-- 3. Place event data -->
				    <span class="addtocalendar atc-style-glow-orange">
				        <var class="atc_event">
				            <var class="atc_date_start">2016-09-30 12:00:00</var>
				            <var class="atc_date_end">2016-09-30 18:00:00</var>
				            <var class="atc_timezone">America/New York</var>
				            <var class="atc_title">Ithaca Aplle Harvest Festival</var>
				            <var class="atc_description">May the force be with you</var>
				            <var class="atc_location">Ithaca Commons</var>
				            <var class="atc_organizer">Tompkins Trust</var>
				            <var class="atc_organizer_email">...</var>
				        </var>
				    </span>
				</div>
				<p>The 34th Annual Great Downtown Ithaca Apple Harvest Festival by Presented Tompkins Trust Company is set to take place September 30 - October 2, 2016.  The 2016 Apple Harvest Festival hosts plenty of apples, local produce, fresh baked goods, family entertainment at every turn, games, rides, prizes and live performances on two stages. Apple Harvest Festival is a great introduction to the rich farm and artist community of Ithaca.  First time visitors can witness a variety of wonderful local entertainment while also visiting the historical outdoor pedestrian shopping mall, The Ithaca Commons.  The pedestrian mall is the epicenter of the festival and the gateway to a nostalgic journey to harvest season fun.</p>
			</div>

			<!-- Media Credit: https://www.youtube.com/watch?v=s9zZR99jfkU -->
			<!-- <iframe src="https://www.youtube.com/embed/s9zZR99jfkU" allowfullscreen></iframe> -->

			<hr>

			<div class="section">
				<img class="section_image" src="images/apple.jpg" alt="apple" />
				<!-- Media Credit: Andrew Halpern -->
				<div class="section_content right">
					<h1>Activities</h1>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>

			<hr>

			<div class="section">
				<div class="section_content left just">
					<h1>Directions</h1>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<img class="section_image" src="images/apple.jpg" alt="apples" />
				<!-- Media Credit: Andrew Halpern -->
			</div>

		</div>

		<footer>
			<?php include 'includes/footer.php'; ?>
		</footer>
  </body>
</html>
