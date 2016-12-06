<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Apple Harvest</title>
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">
	</head>

	<body>
		<?php include 'includes/nav_bar.php';?>

		<h1 id='title'>Contact Us</h1>
		<form>
			<p>
				<input type="text" name="name" id="name" placeholder="John Smith">
				<label>Name</label>
			</p>
			<p>
				<input type="text" name="Email" id="email" placeholder="mail@example.com">
				<label>Email</label>
			</p>
			<p>
				<textarea name="text" placeholder="Message to us"></textarea>
			</p>
			<p>
				<input type="submit" value="Send">
			</p>
		
		</form>

		<footer>
			<?php include 'includes/footer.php'; ?>
		</footer>
  </body>
</html>
