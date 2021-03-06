<!DOCTYPE HTML>

<html lang="en">

	<!--
		Author: Steven Galvin

		Date: 05/25/2020

		Purpose: About Page for Ace in the Hole
	-->

	<?php include '../includes/head.html.php'; ?>

	<body>
		<!-- Embed Facebook Page -->

		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"></script>

        <?php include '../includes/nav.html.php'; ?>

 		<?php include '../includes/header.html.php'; ?>

		<!-- Main Content -->
		 
		<main>

			<section id="about-section">

				<h3>About the Event</h3>
				
				<p>
					The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.
				</p>

				<p>
					There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!
				</p>

				<div id="starting-times-container">
					<h3>Starting Times</h3>

					<table>
						<tr>
							<th>Saturday</th>
							<th>Sunday</th>
						</tr>
						<tr>
							<td>
								Long Course Triathlon
								<br>
								7:00 AM
							</td>
							<td>
								Sprint Triathlon
								<br>
								8:00 AM
							</td>
						</tr>
						<tr>
							<td>
								Olympic Triathlon
								<br>
								7:30 AM
							</td>
							<td>
								Try-a-Tri
								<br>
								8:20 AM
							</td>
						</tr>
						<tr>
							<td>
								10K
								<br>
								7:15 AM
							</td>
							<td>
								Splash n Dash
								<br>
								12:00 PM
							</td>
						</tr>
						<tr>
							<td>
								Half Marathon
								<br>
								7:15 AM
							</td>
							<td></td>
						</tr>
					</table>
				</div>

				<button class="main-button" onclick="location.href='<?php echo SITE_ROOT; ?>/registration';">Click here to get registered!</button>

			</section>

			<section>

				<h3 hidden>Twitter Feed</h3>

				<a class="twitter-timeline" height="350px" data-lang="en" data-theme="dark" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

				<br>

				<h3 hidden>Facebook Feed</h3>

				<div class="fb-page" height="350px" data-href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/?ref=page_internal" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Cas222Aceinthehole-110661963841617/?ref=page_internal" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/?ref=page_internal">Cas222Aceinthehole</a></blockquote></div>

			</section>

			<section hidden>

			</section>

			<section hidden>
			</section>

		</main>

		<?php include '../includes/footer.html.php'; ?>

	</body>
	<script src="../scripts/scripts.js" type="module"></script>
</html>

