<!DOCTYPE HTML>

<html lang="en">

	<!--
		Author: Steven Galvin

		Date: 05/14/2020

		Purpose: Registration Page for Ace in the Hole
	-->

	<?php include '../includes/head.html.php'; ?>

	<body>

        <?php include '../includes/nav.html.php'; ?>

 		<?php include '../includes/header.html.php'; ?>

		<!-- Main Content -->
		 
		<main>

			<section id="registration-section">

				<div>
					<h3>Registration</h3>

					<table>
						<tr>
							<th>Event</th>
							<th>Cost</th>
						</tr>
						<tr>
							<td>Long Course</td>
							<td>$240</td>
						</tr>
						<tr>
							<td>Olympic</td>
							<td>$110</td>
						</tr>
						<tr>
							<td>10k</td>
							<td>$50</td>
						</tr>
						<tr>
							<td>Half Marathon</td>
							<td>$75</td>
						</tr>
						<tr>
							<td>Sprint</td>
							<td>$90</td>
						</tr>
						<tr>
							<td>Try-a-Tri</td>
							<td>$65</td>
						</tr>
					</table>
				</div>

				

				<div>
					<h4>Cost Includes</h4>
					<ul>
						<li>Food & Beer</li>
						<li>Access to the weekend's live entertainment & Fitness Expo</li>
						<li>Commemorative Finisher medal</li>
						<li>Accurate Chip Timing for competitive races</li>
						<li>Ace in the Hole Multisport Weekend Tech Shirt</li>
						<li>Post-event party & entertainment</li>
					</ul>
					<small>NOTE: Tech shirts guaranteed to pre-registered participants only.</small>
				</div>

			</section>

			<section>

			<div>
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

				<div>
					<a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="Portland" data-label_2="Oregon" data-font="Open Sans" data-theme="pure" >Portland Oregon</a>
					<script>
							!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
					</script>
				</div>

			</section>

			<section hidden>

				<h3>Section 3</h3>

				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nesciunt, distinctio quo dolorem placeat consequatur autem repellat tenetur, corporis laboriosam reprehenderit aut aliquid, quod eius atque beatae ex. Nesciunt, ipsum!</p>

				<button class="main-button">Go to page</button>

			</section>

			<section>

                <h3>Get Registered</h3>
                
                <p>Fill out the form below to get registered for our events!</p>

				<?php include '../includes/forms/registration.form.html.php'; ?>

			</section>

		</main>

		<?php include '../includes/footer.html.php'; ?>

	</body>
	<script src="../scripts/scripts.js" type="module"></script>
</html>

