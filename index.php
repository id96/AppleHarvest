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

	<body class="flex-container">
		<?php include 'includes/nav_bar.php';?>

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
					</div><!-- end of _event_date div -->
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
					</div><!-- end of _event_date div -->
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
					</div><!-- end of _event_date div -->
					</li>
				</ul>
			</div><!-- end of _event_container div -->

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
				<!-- <p>Ithaca is not only home to the Finger Lakes, but also several acres of land dedicated to apple orchards, including many where guests are welcome to pick their own apples while enjoying the fall afternoon. Some of the archards you can visit include: Indian Creek Farm, Cornell Orchards, Hemlock Grove Farm, and Kestrel Perch Berries. There are also more than 20 types of apples to choose from, including Pristine, Honeycrisp, Empire, Golden Delicious, and more. Ithaca is also home to the Tompkins County King, which is called the King of apples for its size and flavor,it was the fourth most popular variety in New York in the early 1900's. Considered by many to be the finest apple ever, it is crisp, course, sweet and juicy, with a real antique apple flavor. Unexcelled fresh eating quality and highly prized for sauce, pie and cider making.</p> -->
				<!-- Content Credit: http://www.downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20by%20Tompkins%20Trust -->
			</div>

			<iframe src="https://www.youtube.com/embed/s9zZR99jfkU" allowfullscreen></iframe>

		</div> <!-- end of content div -->

		<footer>
			<?php include 'includes/footer.php'; ?>
		</footer>
  </body>
</html>
