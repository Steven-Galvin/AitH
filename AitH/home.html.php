<!DOCTYPE HTML>

<html lang="en">

	<!--
		Author: Steven Galvin

		Date: 04/22/2020

		Purpose: Home Page for Ace in the Hole
	-->

	<?php include 'includes/head.html.php'; ?>

	<body>

        <?php include 'includes/nav.html.php'; ?>

 		<?php include 'includes/header.html.php'; ?>

		<!-- Main Content -->
		 
		<main>

			<section>

				<h3>Who are we?</h3>
				
				<p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds. We offer Events for Every Body.</p>

				<div class="hidden">
					<img src="images/ace8.jpg" alt="Running smiling while she leads the pack">
				</div>

				<button class="main-button" onclick="location.href='<?php echo SITE_ROOT; ?>/about';">Learn About Us!</button>

			</section>

			<section>

				<h3>How can you get involved?</h3>

				<p>Are you interested in signing up as an athlete or a volunteer? Check out our registration page for more information!</p>

				<button class="main-button" onclick="location.href='<?php echo SITE_ROOT; ?>/registration';">Get Registered!</button>

			</section>

			<section>

				<h3>Need any help?</h3>

				<p>Looking for more information? You can find frequently asked questions at our Help Center. If you have any questions or comments, you can fill out the form and let us know.</p>

				<button class="main-button" onclick="location.href='<?php echo SITE_ROOT; ?>/help';">Visit the Help Center</button>

			</section>

			<section>

				<h3>Checkout past events!</h3>

				<div class="slideshow">
					<div class="slides fade">
						<div class="slide-number">1 / 5</div>
						<img src="images/ace18.jpg" alt="Athletes running up the street">
						<div class="slide-caption">Athletes running up the street</div>
					</div>

					<div class="slides fade">
						<div class="slide-number">2 / 5</div>
						<img src="images/ace4.jpg" alt="Athletes running into the ocean">
						<div class="slide-caption">Athletes running into the ocean</div>
					</div>

					<div class="slides fade">
						<div class="slide-number">3 / 5</div>
						<img src="images/ace9.jpg" alt="Cyclists racing down the street">
						<div class="slide-caption">Cyclists racing down the street</div>
					</div>

					<div class="slides fade">
						<div class="slide-number">4 / 5</div>
						<img src="images/ace7.jpg" alt="Runner smiling while she leads the pack">
						<div class="slide-caption">Runner smiling while she leads the pack</div>
					</div>

					<div class="slides fade">
						<div class="slide-number">5 / 5</div>
						<img src="images/ace14.jpg" alt="Runners rounding the corner of the track">
						<div class="slide-caption">Runners rounding the corner of the track</div>
					</div>

					<a class="previous">&#10094;</a>
					<a class="next">&#10095;</a>
				</div>

			</section>

		</main>

		<?php include 'includes/footer.html.php'; ?>

	</body>
	<script src="scripts/scripts.js" type="module"></script>
</html>
