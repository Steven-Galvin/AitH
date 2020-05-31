<!DOCTYPE HTML>

<html lang="en">

	<!--
		Author: Steven Galvin

		Date: 05/25/2020

		Purpose: About Page for Ace in the Hole
	-->

	<head>

		<meta charset="UTF-8">

		<title>Ace in the Hole: About Us</title>

		<meta name="author" content="Steven Galvin">

		<meta name="description" content="This is the about page for the Ace in the Hole project">

		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

		<link rel="stylesheet" href="../styles/normalize.css">

		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Serif&display=swap" rel="stylesheet">

		<!-- Link to hamburger stylesheet by Jonathan Suh -->

		<link href="../dist/hamburgers.css" rel="stylesheet">

		<link rel="stylesheet/less" type="text/css" href="../styles/styles.less">

		<script src="../scripts/jquery.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
	</head>

	<body>

        <?php include '../includes/nav.html.php'; ?>

 		<?php include '../includes/header.html.php'; ?>

		<!-- Main Content -->
		 
		<main>

			<section>

				<h3>Section 1</h3>
				
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto assumenda, ducimus, molestiae suscipit consectetur natus veritatis minus accusamus a, tempora dolorum iste fugiat temporibus eveniet incidunt! Ullam rerum expedita ut?</p>

				<div class="hidden">
					<img src="https://via.placeholder.com/300?text=Image+or+slideshow+goes+here+on+desktop+only" alt="Placeholder">
				</div>

				<button class="main-button">Go to page</button>

			</section>

			<section>

				<h3>Section 2</h3>

				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis molestias repudiandae ratione vel, dolores voluptatum pariatur rem tempore et delectus dolore nesciunt debitis dolorem impedit sit alias officia, quibusdam eius!</p>

				<button class="main-button">Go to page</button>

			</section>

			<section>

				<h3>Section 3</h3>

				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nesciunt, distinctio quo dolorem placeat consequatur autem repellat tenetur, corporis laboriosam reprehenderit aut aliquid, quod eius atque beatae ex. Nesciunt, ipsum!</p>

				<button class="main-button">Go to page</button>

			</section>

			<section>

				<h3>Section 4</h3>

				<div class="slideshow">
					<img src="https://via.placeholder.com/300?text=Form+or+slideshow+goes+here" alt="Placeholder">
				</div>

			</section>

		</main>

		<?php include '../includes/footer.html.php'; ?>

	</body>
	<script src="../scripts/scripts.js" type="module"></script>
</html>

